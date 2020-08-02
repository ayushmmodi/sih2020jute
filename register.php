<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Walkhoff</title>
      <link rel="stylesheet" href="./css/style-reg.css" />
      <link
         href="https://fonts.googleapis.com/css2?family=Roboto&display=swap"
         rel="stylesheet"
         />
         <link rel="shortcut icon" href="./doctor-dashboard/assets/images/logo-mini.png" />
      <script
         src="https://kit.fontawesome.com/d12a5234ba.js"
         crossorigin="anonymous"
         ></script>
   </head>
   <body>
      <section id="main" class="main">
         <div id="navbar" class="navbar">
         <div class="logo">
       <!-- <img src="./images/logo.png" alt="logo" height="110" width="110" /> -->
        <a class="logo-word" style="font-weight: bold;"><a class="text-primary" href="index.php" style="font-size: 50px; margin-top: 5px;">Fiber</a><a href="index.php" style="color: white; font-size: 50px; margin-top: 5px;">Cops</a>
      </div>
            <ul class="nav-list">
            <li class="nav-li list">
          <a  href="./index.html">Home</a>
        </li>
        <li class="nav-li list"><a href="./about.html">About Us</a></li>
        <li class="nav-li list"><a href="./services.html">Serivces</a></li>
        <li class="nav-li list"><a href="./login.php">Login</a></li>
        <li class="nav-li list"><a class="current" href="./register.php">Register</a></li>
        <li class="nav-li list"><a href="./contact.html">Contact Us</a></li>
            </ul>
         </div>
         <div class="form">
         <div class="form-logo">
            <a href="register.php"><input
            type="image"
            src="./images/flogo.png"
            height="100px"
            width="100px"
            class="logo-dentist"
            /></a>
            <!-- <a href="registerp.php">
            <input type="image" src="./images/man.png" height="100px" /></a> -->
         </div>
         <div class="img-button-text">
            <!-- <h4 class="text-dentist">Dentist</h4>
            <h4 class="text-patient">Patient</h4> -->
         </div>
         <form action="./php/signup.php" method="POST" >
            <div class="form-group">
            <label for="gender">Role:</label>
               <select class="gender"id="gender" name="gender">
                  <option value="male">Farmer</option>
                  <option value="female">Mill Worker</option>
                  <option value="other">Other</option>
               </select>
               <br><br><br>
               <!-- <i class="fa fa-user icon"></i>  -->
               <input class="input-field" type="text" placeholder=" First Name" id="fname" name="fname"> 
               <br>
               <!-- <i class="fa fa-user icon"></i>  -->
               <input class="input-field" type="text" placeholder="Last Name" id="lname" name="lname"> 
               <br>
               <!-- <i class="fa fa-key icon"></i>  -->
               <input class="input-field" type="email" placeholder="Email" id="email" name="email"> 
               <br>
               <!-- <i class="fa fa-user icon"></i>  -->
               <input class="input-field" type="text" placeholder="Username"id="uname" name="uname"> 
               <br>
               <!-- <i class="fa fa-key icon"></i>  -->
               <input class="input-field" type="password" placeholder="Password" id="pwd" name="pwd"> 
               <br>
               <!-- <i class="fa fa-key icon"></i>  -->
               <input class="input-field" type="password" placeholder="Re-Enter Password" id="repwd" name="repwd" >
               <!-- <i class="fa fa-user icon"></i> 
               <input class="input-field" type="number" placeholder="Mobile"id="mobno" name="mobno"> 
               <br> -->
               
               <!-- <i class="fa fa-key icon"></i> 
               <input type="date" class="dob"id="dob" name="dob"> -->
               <br>
               <input type="submit" value='Register' class="btn-login" id="rebtn" name="rebtn" />
            </div>
         </form>
      </section>
   </body>
</html>