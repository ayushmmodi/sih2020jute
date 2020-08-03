<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Fiber Cops</title>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
           <li class="nav-li list"><a href="./services.html">About Jute</a></li>
           <li class="nav-li list"><a href="./statue.php">Statute</a></li>
           <li class="nav-li list"><a href="./register.php">Data And Stats</a></li>
        
   
                <li class="nav-li list"> <a href="login.php" data-toggle="modal" data-target="#employee-login-modal" >
                                         Login
                           </a></li>
   
                <li class="nav-li list"> <a class="current" href="register.php" data-toggle="modal" data-target="#employee-login-modal" >
                                         Registration
                           </a></li>
   
          

   
   
               
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
            
               <br>
            <label for="role">Role:</label>
               <select class="gender"id="role" name="role">
                  <option value="Farmer">Farmer</option>
                  <option value="Mill Worker">Mill Worker</option>
                  <option value="Other">Other</option>
               </select>
               <br><br><br>
               <!-- <i class="fa fa-user icon"></i>  -->
               
			   <input class="input-field" type="mobile" placeholder="Mobile" id="mobile" name="mobile">


			   <br>
         <button type="button" class="btn-login" id="rebtn12" name="rebtn12">send otp</button>
              
                 <script>
                  var otp = "";
                      $(document).ready(function(){
      //function to calculate total
     
      $('#rebtn12').click(function(){
         otp = generateOTP();
        alert(otp);
        alert($('#mobile').val());
       var input = {
      "number" : $('#mobile').val(),
      "otp" : "Your fiber corps farmer otp is : " + otp
    };
       $.ajax({
      url : 'otp.php',
      type : 'POST',
      data : input,
      success : function(response) {
        alert(response);
      }
    });

         $('.hidelement').show();
      });
});

                      function generateOTP() { 
          
    // Declare a digits variable  
    // which stores all digits 
    var digits = '0123456789'; 
    let OTP = ''; 
    for (let i = 0; i < 4; i++ ) { 
        OTP += digits[Math.floor(Math.random() * 10)]; 
    } 
    return OTP; 
} 

function verifyotp(){
if($('#otp').val()==otp){
  alert("sucessful");


}else{
  alert("unsucessful"+$('#otp').val()+otp);
}

}
                    </script>
<div class="hidelement" style="display: none;">
               <input class="input-field" type="mobile" placeholder="OTP" id="otp" name="otp">
               <!-- <i class="fa fa-user icon"></i> 
               <input class="input-field" type="number" placeholder="Mobile"id="mobno" name="mobno"> 
               <br> -->
              
               <!-- <i class="fa fa-user icon"></i>  -->
            
               <!-- <i class="fa fa-key icon"></i> 
               <input type="date" class="dob"id="dob" name="dob"> -->

               <button type="button" class="btn-login" id="rebtn" name="rebtn" onclick="verifyotp()" />Register</button>

             </div>
            </div>
         </form>
      </section>
   </body>
</html>