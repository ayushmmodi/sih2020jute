<?php
if (isset($_POST['submit']))
{

    require 'dbconnect.php';

    $name  = $_POST['name'];
    $email  = $_POST['email'];
    $num    = $_POST['contactno'];
    $docname = $_POST['docname'];
    $appdate    = $_POST['appdate'];

                $sql = "INSERT INTO schedule(name,email,contact,docname,appdate) VALUES (?,?,?,?,?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql))
                {
                    echo "<script>alert('There an empty fields ');
                document.location='./bookapp.php'</script>";
                exit();
                    
                }
                else
                {
                    mysqli_stmt_bind_param($stmt, "ssiss", $name, $email, $num, $docname,$appdate);
                    mysqli_stmt_execute($stmt);
                    echo "<script>alert('Appointment Scheduled Successfully');
                    document.location='../patient-dashboard/pages/book.php'</script>";
                    exit();
                }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else
{
    header("Location:./book.php?sqlayush");
    exit();
}

