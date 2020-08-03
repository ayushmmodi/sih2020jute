<?php





if (isset($_POST['submit']))
{

    $servername = "localhost";

$dbUsername = "root";

$dbPassword = "";

$dbName = "fiber_cops";
       // Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

    $seed = $_POST['seed_bills'];
    $water = $_POST['water_bills'];
    $electricity = $_POST['electricity_bills'];
    $chemical = $_POST['chemical_bills'];
	$equipments = $_POST['equipments_bills'];
    $transport = $_POST['transport_bills'];
    $othercost = $_POST['other_cost'];
	

    if (empty($seed) || empty($water) || empty($electricity) || empty($chemical) || empty($equipments) || empty($transport) || empty($othercost))
    {

        echo "<script>alert('There an empty fields');
        document.location='../register.php'</script>";
        exit();

    }

    else
    {
 

                $sql = "INSERT INTO cost (seed, water, electricity, chemical, equipments, transport, othercost) VALUES ('$seed', '$water', '$electricity', '$chemical', '$equipments', '$transport', '$othercost',)";
            }
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
  



?>