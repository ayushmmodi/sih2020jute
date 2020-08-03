<?php

$con = mysqli_connect("localhost","root","","fiber_cops");
if(mysqli_connect_errno())
{
    echo"error";

}



if (isset($_POST['submit']))
{


    $seed = $_POST['seed_bills'];
    $water = $_POST['water_bills'];
    $electricity = $_POST['electricity_bills'];
    $chemical = $_POST['chemical_bills'];
	$equipments = $_POST['equipments_bills'];
    $transport = $_POST['transport_bills'];
    $othercost = $_POST['other_cost'];
	

    


    
 

             $sql = "INSERT INTO cost VALUES ('','','$seed', '$water', '$electricity', '$chemical', '$equipments', '$transport', '$othercost')";
             $query = mysqli_query($con,$sql);

}


?>