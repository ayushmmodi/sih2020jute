
<?php  
session_start();
$error = array();
$connection = mysqli_connect("localhost","root","","admin");
if(mysqli_connect_errno())
{
  echo "CONNECTION ERROR";
}
if(isset($_POST['register']))
{
  $millfname = $_POST['firstname'];
  $millfname = strip_tags($millfname);
  $millfname = strtolower($millfname);
  $millfname=str_replace(" ","",$millfname);
  $_SESSION['millfname'] = $millfname;
  $milllname = $_POST['lastname'];
  $milllname = strip_tags($milllname);
  $milllname = strtolower($milllname);
  $milllname = str_replace(" ","",$milllname);
  $_SESSION['milllname'] = $milllname;
  $millemail  = $_POST['email'];
  $_SESSION['millemail'] = $millemail;
  $contactnumber = "";
if(isset($_POST['contactnumber']))
{
  $contactnumber = $_POST['contactnumber'];
}
  $millage = $_POST['age'];
  $_SESSION['millage'] = $millage;
  $millgender = $_POST['gender'];
  $idcard = $_POST['idcard'];
  $adhar = $_POST['adhar'];
  $_SESSION['adhar'] = $adhar;
  //$pan=$_POST['pan'];
  //$_SESSION['pan'] = $pan;
  $religion = $_POST['religion'];
  $_SESSION['religion'] = $religion;
  $caste  = $_POST['caste'];
  $qualification = $_POST['qualification'];
  $qualification=strtolower($qualification);
  $address = $_POST['address'];
  $_SESSION['address'] = $address;
  $state = $_POST['state'];
  $city = $_POST['city'];
  $city = str_replace(" ","_",$city);
  $pincode = $_POST['pincode'];
  $organisationname ="";
  if(isset($_POST['organisationname']))
  {
    $organisationname=$_POST['organisationname'];
    $organisationname = strtolower($organisationname);
   }
  $organisationnumber = $_POST['organisationnumber'];
  $organisationaddress = $_POST['organisationaddress'];
  $_SESSION['organisationaddress'] = $organisationaddress;

  $income = $_POST['income'];
  $salaryrecieved = "";
  if(isset($_POST['salary_recieved']))
  {
    $salaryrecieved=$_POST['salary_recieved'];
  }
   if(preg_match('/[a-zA-Z]/',$milllname))
   {

    }
     else{
          array_push($error,"YOUR FIRST NAME MUST BE IN CHARACTERS");
   }
      if(preg_match('/[a-zA-Z]/',$millfname))
    {
       }
   else{
    array_push($error,"YOUR LAST NAME MUST BE IN CHARACTERS");
}
if(!empty($millemail))
{
if(filter_var($millemail,FILTER_VALIDATE_EMAIL))
{

}
else{
      array_push($error,"YOUR EMAIL IS NOT VALID");


}
}

if(preg_match("/[0-9]/",$contactnumber))
{

}
else{
        array_push($error,"YOUR NO MUST BE IN NUMBERS");

}
if(preg_match('/[0-9]/',$adhar))
{

}
else{
  array_push($error,"NOT VALID ADHAR NUMBER");


}
if(strlen($adhar) > 12 )
{
  array_push($error,"YOUR ADHAR NUMBER IS NOT OF CORRECT LENGTH");
}
if(strlen($adhar) < 12 )
{
    array_push($error,"YOUR ADHAR NUMBER IS NOT OF CORRECT LENGTH");


}
//if(preg_match('/[a-zA-Z0-9]/',$pan))
//{

//}
//else{
 // array_push($error,"NOT VALID PAN NUMBER");

//}
if(preg_match('/[a-zA-Z]/',$city))
{

}

else{
  array_push($error,"ENTER CITY IN CHARACTERS");


}
if(preg_match('/[0-9]/',$pincode))
{

}
else
{
  array_push($error,"ENTER VALID PINCODE");

}
if(preg_match("/[0-9]/",$organisationnumber))
{

}
else
{
    array_push($error,"ENTER VALID CONTACT NUMBER");
}
$queryemail = mysqli_query($connection,"SELECT email FROM  mill_worker WHERE email='$millemail'");
$emailrows=mysqli_num_rows($queryemail);
if($emailrows > 0)
{
array_push($error,"EMAIL ALREADY EXIST!");
}





if(empty($error)){
  $query = mysqli_query($connection,"INSERT INTO mill_worker VALUES('','$millfname','$milllname','$millemail','$contactnumber','$millage','$millgender','$idcard','$adhar' ,'$religion','$caste','$qualification','$address','$state','$city','$pincode','$organisationname','$organisationnumber','$organisationaddress','$income','$salaryrecieved')");
array_push($error,"SUCCESFULLY ADDED TO DATABASE");
  }

}
?>
