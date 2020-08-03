  <?php

// Database configuration
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "fiber_cops";

$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Get images from the database
$query = $db->query("UPDATE user set verify='yes' WHERE email='ayumodi12@gmail.com'");
?> 
<h1>request accepted</h1>