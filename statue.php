<?php
session_start();
 if(isset($_SESSION['infor']))
{
  $accountant = $_SESSION['infor'];



}

?>
<!DOCTYPE html>
<html>

    <head>
      <link rel="stylesheet" href="./css/style-index.css" />
      <link rel="stylesheet" href="background_styles.css">



      <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
      

      <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.3/build/pure-min.css" integrity="sha384-cg6SkqEOCV1NbJoCu11+bm0NvBRc8IYLRGXkmNrqUBfTjmMYwNKPWBTIKyw9mHNJ" crossorigin="anonymous">
    
    
    
     
      <title>Fiber Cops</title>


    </head>

<body>
<section class="main">
    <div id="navbar" class="navbar" style="background: black;">
         <div class="logo">
          <!-- <img src="./images/logo.png" alt="logo" height="110" width="110" /> -->
           <a class="logo-word" style="font-weight: bold;"><a class="text-primary" href="index.php" style="font-size: 50px; margin-top: 25px;">Fiber</a><a href="index.php" style="color: white; font-size: 50px; margin-top: 25px;">Cops</a>
         </div>
         <ul class="nav-list">
           <li class="nav-li list">
             <a  href="./index.php">Home</a>
           </li>
           <li class="nav-li list"><a  href="./about.html">About Us</a></li>
      
           <li class="nav-li list"><a class="current" href="./statue.php">Statute</a></li>
           <li class="nav-li list"><a href="#">Data And Stats</a></li>
        
   
                <li class="nav-li list"> <a href="login.php" data-toggle="modal" data-target="#employee-login-modal" >
                                         Login
                           </a></li>
   
                <li class="nav-li list"> <a href="register.php" data-toggle="modal" data-target="#employee-login-modal" >
                                         Registration
                           </a></li>
   
   
   
   
               
         </ul>
       </div>
	
     



        <div class="flex items-center justify-center h-screen">

        <section class="text-gray-700 body-font">
			<div class="container px-5 py-24 mx-auto">
			<div class="text-center mb-20">
			<a class="sm:text-3xl text-2xl font-medium text-center title-font text-gray-900 mb-4" style="color:white; font-size:300%;" >Statute</a>
    		</div>
			<div class="flex flex-wrap lg:w-4/5 sm:mx-auto sm:mb-2 -mx-2">
			<div class="p-2 sm:w-1/2 w-full">
			<div class="bg-gray-200 rounded flex p-4 h-full items-center">
			<svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
            <path d="M22 4L12 14.01l-3-3"></path>
			</svg>
          <a class="title-font font-medium" href="statue/acts.php">Acts</a>
        </div>
      </div>
      <div class="p-2 sm:w-1/2 w-full">
        <div class="bg-gray-200 rounded flex p-4 h-full items-center">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
            <path d="M22 4L12 14.01l-3-3"></path>
          </svg>
          <a class="title-font font-medium" href="statue/orders.php">Orders</a>
        </div>
      </div>
      <div class="p-2 sm:w-1/2 w-full">
        <div class="bg-gray-200 rounded flex p-4 h-full items-center">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
            <path d="M22 4L12 14.01l-3-3"></path>
          </svg>
          <a class="title-font font-medium" href="statue/rules.php">Rules</a>
        </div>
      </div>
      <div class="p-2 sm:w-1/2 w-full">
        <div class="bg-gray-200 rounded flex p-4 h-full items-center">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
            <path d="M22 4L12 14.01l-3-3"></path>
          </svg>
          <a class="title-font font-medium" href="statue/national-jute-policy-2005.php">National Jute Policy 2005</a>
        </div>
      </div>
      
  </div>
  </section>
</section>
</div>
</section>
<SECTION>
  <footer style="background: black; padding: 100px;">
  

    <a href="" style="margin-left: 50px; font-size: 25px; text-decoration: none; color: white; ">Gallery</a>

    <a href="" style="margin-left: 150px; font-size: 25px; text-decoration: none; color: white; ">Feedback</a>


    <a class="logo-word" style="font-weight: bold;"><a class="text-primary" href="index.php" style="font-size: 50px; margin-left: 150px;">Fiber</a><a href="index.php" style="color: white; font-size: 50px; margin-top: 25px;">Cops</a>



      <a href="" style="margin-left: 150px; font-size: 25px; text-decoration: none; color: white; ">Faqs</a>

    <a href="" style="margin-left: 150px; font-size: 25px; text-decoration: none; color: white; ">Contact Us</a>
</footer>
</SECTION>
</body>
</html>