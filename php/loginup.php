<?php
if (isset($_POST['lobtn']))
{
    require 'dbconnect.php';

    $email = $_POST['email'];
    $password = $_POST['pwd'];

    if (empty($email) || empty($password))
    {
        echo "<script>alert('There an empty fields ');
        document.location='../login.php'</script>";
        exit();
    }
    else
    {
        $sql = "SELECT * FROM user WHERE username=? OR email=? ";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql))
        {
            echo "<script>alert('SQL Error Occurred ');
            document.location='../login.php'</script>";
            exit();
        }
        else
        {
            mysqli_stmt_bind_param($stmt, "ss", $email, $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if ($row = mysqli_fetch_assoc($result))
            {
                $status=$row['verify'];
                $statusno="no";
                if (strcmp($status, $statusno) !== 0) { 
                } 
                else { 
                    echo "<script>alert('User Under Verfication');
                    document.location='../login.php'</script>";
                    exit(); 
                }
                $pwdCheck = password_verify($password, $row["password"]);
                if ($pwdCheck == false)
                {
                    
                    echo "<script>alert('Wrong Password ');
                    document.location='../login.php'</script>";
                    exit();
                }
                elseif ($pwdCheck == true)
                {
                    session_start();
                    $_SESSION['userId'] = $row['username'];
                    $_SESSION['userfname'] = $row['first_name'];
                    $_SESSION['userlname'] = $row['last_name'];
                    $_SESSION['username'] = $row['username']; 
                    header("Location:../dashboard.php?loginsuccesssss");
                    exit();
                }
                else
                {
                    echo "<script>alert('Wrong Password ');
                    document.location='../login.php'</script>";
                    exit();
                }
            }
            else
            {
                         echo "<script>alert('There is no user with this Email or Username  ');
                 document.location='../login.php'</script>";
                exit();
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
