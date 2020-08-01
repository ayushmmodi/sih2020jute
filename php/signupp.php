<?php
if (isset($_POST['rebtn']))
{

    require 'dbconnect.php';

    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $username = $_POST['uname'];
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    $repassword = $_POST['repwd'];
    $gender = $_POST['gender'];

    if (empty($firstname) || empty($lastname) || empty($username) || empty($email) || empty($password) || empty($repassword) || empty($gender))
    {
        echo "<script>alert('There an empty fields');
        document.location='../registerp.php'</script>";
        exit();

    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]+$/", $username))
    {
       
        echo "<script>alert('Enter a Validate Email or Username ');
        document.location='../registerp.php'</script>";
        exit();

    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        echo "<script>alert('There a Validate Email ');
        document.location='../registerp.php'</script>";
        exit();
    }

    elseif (!preg_match("/^[a-zA-Z0-9]+$/", $username))
    {
        echo "<script>alert('There a Validate Username');
        document.location='../registerp.php'</script>";
        exit();
    }
    elseif ($password !== $repassword)
    {
        echo "<script>alert('Password Don't Match  ');
        document.location='../registerp.php'</script>";
        exit();
    }

    else
    {
        $sql = "SELECT uname FROM login_signupp WHERE uname=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql))
        {
            echo "<script>alert('SQL Error Occurred ');
            document.location='../registerp.php'</script>";
            exit();
        }
        else
        {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0)
            {
                echo "<script>alert('Username Already taken ');
                document.location='../registerp.php'</script>";
                exit();
            }
            else
            {
                $sql = "INSERT INTO login_signupp(fname,lname,email,uname,pwd,gender) VALUES (?,?,?,?,?,?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql))
                {
                    echo "<script>alert('SQL Error Occurred ');
                    document.location='../registerp.php'</script>";
                    exit();
                    
                }
                else
                {
                    $hashedpwd = password_hash($password, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "ssssss", $firstname, $lastname, $email, $username, $hashedpwd, $gender);
                    mysqli_stmt_execute($stmt);
                    echo "<script>alert('User registered Successfully ');
                    document.location='../loginp.php'</script>";
                    exit();
                }
            }
        }

    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else
{
    header("Location:../registerp.php");
    exit();
}