<?php
session_start();
$error = array();
$date = date("y-m-d");
$time = time();
$connection = mysqli_connect("localhost","root","","admin");
if(mysqli_connect_errno())
{
  echo "CONNECTION ERROR";
}
if(isset($_POST['enter']))
{
  $adminismail=$_POST['email'];
  if(filter_var($adminismail,FILTER_VALIDATE_EMAIL))
  {

  }
  else{
 array_push($error,"EMAIL IS NOT VALID");

  }
  $key = $_POST['key'];
  $mainkey="adkey1234";
  if($key == $mainkey)
  {
$query = mysqli_query($connection,"INSERT INTO administrator VALUES('','$adminismail','$date','$time')");
$_SESSION['adminismail']=$adminismail;  
 array_push($error,"YOU ARE SUCCESFULLY LOGGED IN");
 header("Location:index.php");
  }
  else{
    array_push($error,"YOUR KEY DIDN'T MATCH!");
  }

}
?>

<!DOCTYPE html>
<html>

    <head>
      <link rel="stylesheet" href="css\style.css">
      <link rel="stylesheet" href="./css/style-index.css" />
      <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
  <link rel="shortcut icon" href="./doctor-dashboard/assets/images/logo-mini.png" />
  <script src="https://kit.fontawesome.com/d12a5234ba.js" crossorigin="anonymous"></script>


      <script src="js/script.js" defer></script>
     
      <title>Fiber Cops</title>


    </head>

    <body>



           <div id="navbar" class="navbar" >
      <div class="logo">
       <!-- <img src="./images/logo.png" alt="logo" height="110" width="110" /> -->
        <h1 class="logo-word"><span class="text-primary">Fiber</span>Cops</h1>
      </div>
      <ul class="nav-list">
        <li class="nav-li list">
          <a class="current" href="./index.html">Home</a>
        </li>
        <li class="nav-li list"><a href="./about.html">About Us</a></li>
        <li class="nav-li list"><a href="./services.html">About Jute</a></li>
        <li class="nav-li list"><a href="./login.php">Statute</a></li>
        <li class="nav-li list"><a href="./register.php">Data And Stats</a></li>
        <?php if(!isset($_SESSION['adminismail']) && !isset($_SESSION['adminmail']) && !isset($_SESSION['infor']))
          {

          echo '

             <li class="nav-li list"> <a href="administration_login.php" data-toggle="modal" data-target="#employee-login-modal" >
                                      Employee Login
                        </a></li>';

            }?>
      </ul>
    </div>    










<div class="flex items-center justify-center h-screen">
  <div class="w-full max-w-xs">
  <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" action="administration_login.php">
    <h4>Employee Login</h4><br>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        EMAIL
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="email" placeholder="email" name="email" required>
    </div>
    <?php 
    if(in_array("EMAIL IS NOT VALID",$error))
    {
            echo '<span style="color:red;">ENTERED EMAIL IS NOT VALID</span>';

           }
      ?>
    
    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
        ENTER KEY
      </label>
      <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="******************" name="key" required>
    </div>
         <?php
          if(in_array("YOUR KEY DIDN'T MATCH!",$error))
               {          
            echo '<span style="color:red;">ENTERED KEY DIDNOT MACTH!</span>';

           }
      ?>
    <br>
    <div class="flex items-center justify-between">   
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"  name="enter" type="submit">
        Log In
      </button>
    </div>
    <?php 
    if(in_array("YOU ARE SUCCESFULLY LOGGED IN",$error))
    {
            echo '<span style="color:green;">YOU ARE SUCCESFULLY LOGGEDIN!</span>';

           }
      ?>
    
  </form>
  <p class="text-center text-gray-500 text-xs">
    &copy;2020 FiberCops. All rights reserved.
  </p>
</div>
</div>
