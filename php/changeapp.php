<?php
if (isset($_POST['submit']))
{

    require 'dbconnect.php';

    $name  = $_POST['name'];
    $email  = $_POST['email'];
    $num    = $_POST['contactno'];
    $docname = $_POST['docname'];
    $appdate    = $_POST['appdate'];
    $chandate    = $_POST['chandate'];

                $sql = "INSERT INTO dschedule(name,email,contact,docname,appdate,chandate) VALUES (?,?,?,?,?,?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql))
                {
                    echo "<script>alert('There an empty fields ');
                document.location='../doctor-dashboard/pages/chsch.php'</script>";
                exit();
                    
                }
                else
                {
                    mysqli_stmt_bind_param($stmt, "ssisss", $name, $email, $num, $docname,$appdate,$chandate);
                    mysqli_stmt_execute($stmt);
                    echo "<script>alert('Appointment Changed Successfully');
                    document.location='../doctor-dashboard/pages/chsch.php'</script>";
                    exit();
                }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else
{
    echo "<script>alert('There's a SQL error ');
    document.location='../doctor-dashboard/pages/chsch.php'</script>";
    exit();
}