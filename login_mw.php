<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Walkhoff</title>
  <link rel="stylesheet" href="./css/style-login.css" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/d12a5234ba.js" crossorigin="anonymous"></script>
  <link rel="shortcut icon" href="./doctor-dashboard/assets/images/logo-mini.png" />
</head>

<body>
  <section id="main" class="main">
  <div id="navbar" class="navbar" style="">
         <div class="logo">
          <!-- <img src="./images/logo.png" alt="logo" height="110" width="110" /> -->
           <a class="logo-word" style="font-weight: bold;"><a class="text-primary" href="index.php" style="font-size: 50px; margin-top: 5px;">Fiber</a><a href="index.php" style="color: white; font-size: 50px; margin-top: 5px;">Cops</a>
         </div>
         <ul class="nav-list">
           <li class="nav-li list">
             <a  href="./index.php">Home</a>
           </li>
           <li class="nav-li list"><a  href="./about.php">About Us</a></li>
           
           <li class="nav-li list"><a href="./statue.php">Statute</a></li>
           <li class="nav-li list"><a href="./register.php">Data And Stats</a></li>
        
   
                <li class="nav-li list"> <a class="current" href="login.php" data-toggle="modal" data-target="#employee-login-modal" > 
                                         Login
                           </a></li>
   
                <li class="nav-li list"> <a href="register.php" data-toggle="modal" data-target="#employee-login-modal" >
                                         Registration
                           </a></li>    
         </ul>
       </div>
    <div class="form">
      <div class="form-logo">
	  <a href="loginp.php">
        <input type="image" src="./images/flogo.png" height="100px" />
		</a>
      </div>
      </br><br>
      <form action="./php/loginupp.php" method="POST">
        <div class="form-group">
        <input type="radio" onclick="document.location.href='login.php'"  name="choicef" class="lgtype" value="farmer"/> &nbsp;Farmer&nbsp;&nbsp;&nbsp;
          <input type="radio" checked onclick="document.location.href='login_mw.php'"  name="choicemw" class="lgtype" value="millworker"/>&nbsp;Mill Worker<br><br>
          <i class="fa fa-user icon"></i>
          <input class="input-field" type="text" placeholder="Username or Email" id="email" name="email">
          <br>
          <i class="fa fa-key icon"></i>
          <input class="input-field" type="password" placeholder="Password" id="pwd" name="pwd">
          <input type="submit" value="Login" class="btn-login" id="lobtn" name="lobtn" />
          <div class="forgot-create">
            <a href="#" style>Forgot Password</a>
            <br>
            <a href="./register.php"> Create Account </a>
          </div>
        </div>
      </form>
    </div>
  </section>
</body>

</html>