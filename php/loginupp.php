<?php
if (isset($_POST['lobtn']))
{
    require 'dbconnect.php';

    $email = $_POST['email'];
    $password = $_POST['pwd'];

    if (empty($email) || empty($password))
    {
        echo "<script>alert('There an empty fields ');
        document.location='../register.php'</script>";
        exit();
    }
    else
    {
        $sql = "SELECT * FROM user WHERE username=? OR email=?; ";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql))
        {
            echo mysqli_error($conn);
           // echo "<script>document.location='../login_mw.php'</script>";
            exit();
        }
        else
        {
            mysqli_stmt_bind_param($stmt, "ss", $email, $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result))
            {
                $pwdCheck = password_verify($password, $row["password"]);
                if ($pwdCheck == false)
                {
                    echo "<script>alert('Wrong Password ');
                    document.location='../login_mw.php'</script>";
                    exit();
                }
                elseif ($pwdCheck == true)
                {
                    session_start();
                    $_SESSION['userId'] = $row['userid'];
                    $_SESSION['userfname'] = $row['fname'];
                    $_SESSION['userlname'] = $row['lname'];
                    $_SESSION['username'] = $row['uname'];
                    header("Location:../dashboardmw.php?loginsuccess");
                    exit();
                }
                else
                {
                    echo "<script>alert('Wrong Password ');
                    document.location='../login_mw.php'</script>";
                    exit();
                }
            }
            else
            {
                echo "<script>alert('There is nouser with this Email or Username  ');
                 document.location='../login_mw.php'</script>";
            }
        }
    }
}
else
{
    header("Location:../login.php?Sqlerror");
    exit();
}
?>
