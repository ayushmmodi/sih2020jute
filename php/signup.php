<?php
if (isset($_POST['rebtn']))
{

    require 'dbconnect.php';

    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $username = $_POST['uname'];
    $mobile = $_POST['mobile'];
	$email = $_POST['email'];
    $password = $_POST['pwd'];
    $repassword = $_POST['repwd'];
	$role = $_POST['role'];
    $verify="no";

    if (empty($firstname) || empty($lastname) || empty($username) || empty($email) || empty($password) || empty($repassword) || empty($mobile) || empty($role))
    {

        echo "<script>alert('There an empty fields');
        document.location='../register.php'</script>";
        exit();

    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]+$/", $username))
    {
        echo "<script>alert('Enter a Validate Email or Username ');
        document.location='../register.php'</script>";
        exit();

    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        echo "<script>alert('There a Validate Email ');
        document.location='../register.php'</script>";
        exit();
    }

    elseif (!preg_match("/^[a-zA-Z0-9]+$/", $username))
    {
        echo "<script>alert('There a Validate Username');
        document.location='../register.php'</script>";
        exit();
    }
    elseif ($password !== $repassword)
    {
        echo "<script>alert('Password Don't Match  ');
        document.location='../register.php'</script>";
        exit();
    }

    else
    {
        $sql = "SELECT username FROM user WHERE username=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql))
        {
            echo "<script>alert('SQL Error Occurred ');
                document.location='../register.php'</script>";
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
                document.location='../register.php'</script>";
                exit();
            }
            else
            {
                $sql = "INSERT INTO user(first_name,last_name,email,mobile_number,username,password,role,verify) VALUES (?,?,?,?,?,?,?,?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql))
                {   echo mysqli_error($conn);
                    // echo "<script>alert('SQL Error Occurred ');
                    // document.location='../register.php'</script>";
                    // exit();
                }
                else
                {
                    $hashedpwd = password_hash($password, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "ssssssss", $firstname, $lastname, $email, $mobile, $username, $hashedpwd,$role,$verify);
                    mysqli_stmt_execute($stmt);
                    echo "<script>alert('User registered Successfully ');
                    document.location='../login.php'</script>";
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
    header("Location:../register.php");
    exit();
}