<?php
session_start(); ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FiberCops</title>
  <link rel="stylesheet" href="./css/style-index.css" />
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
  <link rel="shortcut icon" href="./doctor-dashboard/assets/images/logo-mini.png" />
  <script src="https://kit.fontawesome.com/d12a5234ba.js" crossorigin="anonymous"></script>
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
          <a class="current" href="./index.html">Home</a>
        </li>
        <li class="nav-li list"><a href="./about.html">About Us</a></li>
        <li class="nav-li list"><a href="./services.html">About Jute</a></li>
        <li class="nav-li list"><a href="./statue.php">Statute</a></li>
        <li class="nav-li list"><a href="./register.php">Data And Stats</a></li>
     

             <li class="nav-li list"> <a href="admin_login.php" data-toggle="modal" data-target="#employee-login-modal" >
                                      Login
                        </a></li>

             <li class="nav-li list"> <a href="admin_login.php" data-toggle="modal" data-target="#employee-login-modal" >
                                      Registration
                        </a></li>




            
      </ul>
    </div>
    <section class="first-sec">
      <div class="first-above">
        <h1 class="motto-second">
          Jute
        </h1>
        <p class="motto-first" style="font-weight: bolder;">
          Jute is an important natural fibre crop in India next to cotton.<br>In trade and industry, jute and mesta crop together known as raw <br>jute as their uses are almost same.
        </p>
        
        
      </div>
      <div class="first-below" onclick="window.location.href='contact.html'">
        <div class="first-imge">
          <div class="nolinear">
            <div>
              <img class="logo-firsts" src="./images/wheat.png" alt="healthy-tooth" width="50px" />
            </div>
            <div class="linear">
              <h3 class="first-head">Jute Info</h3>
              <p>Know More About Jute</p>
            </div>
          </div>
        </div>
        <div class="first-imge">
          <div class="nolinear">
            <div>
              <img class="logo-firsts" src="./images/farm.png" alt="healthy-tooth" width="50px" />
            </div>
            <div class="linear">

              <h3 class="first-head">Jute Cultivations</h3>
              <p>Jute Cultivation in India: Conditions, Method!</p>
            </div>
          </div>
        </div>
        <div class="first-imge">
          <div class="nolinear">
            <div>
              <img class="logo-firsts" src="./images/product.png" alt="healthy-tooth" width="50px" />
            </div>
            <div class="linear">
              <h3 class="first-head">Products</h3>
              <p>Products of jute</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </section>


  <section class="text-gray-700 body-font" style="margin-top: -80px; ">







<div class="container px-5 py-24 mx-auto flex flex-wrap">
  <div class="flex flex-wrap -m-4">


   


    <div class="p-4 lg:w-1/2 md:w-full">
      <div class="flex border-2 rounded-lg border-black p-8 sm:flex-row flex-col">
        <div class="w-16 h-16 sm:mr-8 sm:mb-0 mb-4 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-8 h-8" viewBox="0 0 24 24">
            <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
          </svg>
        </div>
        <div class="flex-grow">
          <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Jute Cultivation</h2>
          <p class="leading-relaxed text-base">Check Out<br>Jute Cultivation in India: Conditions, Method!</p>
          <a class="mt-3 text-indigo-500 inline-flex items-center" href="info/jute-cultivation.php">Learn More
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>
    </div>
    <div class="p-4 lg:w-1/2 md:w-full">
      <div class="flex border-2 rounded-lg border-black p-8 sm:flex-row flex-col">
        <div class="w-16 h-16 sm:mr-8 sm:mb-0 mb-4 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" class="w-10 h-10" viewBox="0 0 24 24">
            <path d="M0,6 L10,0 L20,6 L20,8 L0,8 L0,6 Z M0,18 L20,18 L20,20 L0,20 L0,18 Z M2,16 L18,16 L18,18 L2,18 L2,16 Z M2,8 L6,8 L6,16 L2,16 L2,8 Z M8,8 L12,8 L12,16 L8,16 L8,8 Z M14,8 L18,8 L18,16 L14,16 L14,8 Z" id="Combined-Shape"></path>
            <circle cx="12" cy="7" r="4"></circle>
          </svg>
        </div>
        <div class="flex-grow">
          <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Statue</h2>
          <p class="leading-relaxed text-base">Check Out <br>Acts/Orders/Rules/policy</p>
          <a class="mt-3 text-indigo-500 inline-flex items-center" href="statue.php ">Learn More
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>
    </div>


    <div class="p-4 lg:w-1/2 md:w-full">
      <div class="flex border-2 rounded-lg border-black p-8 sm:flex-row flex-col">
        <div class="w-16 h-16 sm:mr-8 sm:mb-0 mb-4 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-8 h-8" viewBox="0 0 24 24">
            <path xmlns="http://www.w3.org/2000/svg" d="M 0 0 l 6 4 l 8 -4 l 6 4 v 16 l -6 -4 l -8 4 l -6 -4 V 0 Z m 7 6 v 11 l 6 -3 V 3 L 7 6 Z" />
          </svg>
        </div>
        <div class="flex-grow">
          <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Weather</h2>
          <p class="leading-relaxed text-base">Check Out<br>Weather Of Your State</p>
          <a class="mt-3 text-indigo-500 inline-flex items-center" href="weather.php">Learn More
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>
    </div>


    <div class="p-4 lg:w-1/2 md:w-full">
      <div class="flex border-2 rounded-lg border-black p-8 sm:flex-row flex-col">
        <div class="w-16 h-16 sm:mr-8 sm:mb-0 mb-4 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-8 h-8" viewBox="0 0 24 24">
           
           <path xmlns="http://www.w3.org/2000/svg" d="M 10 1 l 10 6 l -10 6 L 0 7 l 10 -6 Z m 6.67 10 L 20 13 l -10 6 l -10 -6 l 3.33 -2 L 10 15 l 6.67 -4 Z" />
          </svg>
        </div>
        <div class="flex-grow">
          <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Data And Stats</h2>
          <p class="leading-relaxed text-base">Check Out <br> Data And Stats</p>
          <a class="mt-3 text-indigo-500 inline-flex items-center" href="jute-cultivation.php">Learn More
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>
    </div>

    <div class="p-4 lg:w-1/2 md:w-full">
      <div class="flex border-2 rounded-lg border-black p-8 sm:flex-row flex-col">
        <div class="w-16 h-16 sm:mr-8 sm:mb-0 mb-4 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-8 h-8" viewBox="0 0 24 24">
            <path d="M18,9.87016923 L18,20 L2,20 L2,9.87077601 C2.30866727,9.95497234 2.64341414,10 3,10 C3.70959284,10 4.3932222,9.81559798 5,9.49198691 L5,14 L15,14 L15,9.49330204 C15.6064249,9.81616801 16.2898957,10 17,10 C17.3565204,10 17.6912816,9.95474687 18,9.87016923 Z M3,0 L0.94921875,6.15234375 C0.423463896,7.72960831 1.34314575,9 3,9 C4.65348288,9 6.14783953,7.66944427 6.33020882,6.02812059 L7,0 L3,0 Z M8,0 L7.30003297,6.29970324 C7.13486445,7.78621995 8.21738979,9 9.71911621,9 L10.2808838,9 C11.7858105,9 12.8656707,7.79103596 12.699967,6.29970324 L12,0 L8,0 Z M13,0 L13.6697912,6.02812059 C13.8524466,7.672019 15.3431458,9 17,9 C18.6534829,9 19.5750203,7.72506087 19.0507813,6.15234375 L17,0 L13,0 Z" id="Combined-Shape"></path>
          </svg>
        </div>
        <div class="flex-grow">
          <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Products</h2>
          <p class="leading-relaxed text-base">Check Out <br> Products of jute</p>
          <a class="mt-3 text-indigo-500 inline-flex items-center" href="info/products.php">Learn More
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>
    </div>

    <div class="p-4 lg:w-1/2 md:w-full">
      <div class="flex border-2 rounded-lg border-black p-8 sm:flex-row flex-col">
        <div class="w-16 h-16 sm:mr-8 sm:mb-0 mb-4 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" class="w-8 h-8" viewBox="0 0 20 20">
            <path d="M0,3.99406028 C0,2.8927712 0.898212381,2 1.99079514,2 L18.0092049,2 C19.1086907,2 20,2.89451376 20,3.99406028 L20,16.0059397 C20,17.1072288 19.1017876,18 18.0092049,18 L1.99079514,18 C0.891309342,18 0,17.1054862 0,16.0059397 L0,3.99406028 Z M6,4 L14,4 L14,16 L6,16 L6,4 Z M2,5 L4,5 L4,7 L2,7 L2,5 Z M2,9 L4,9 L4,11 L2,11 L2,9 Z M2,13 L4,13 L4,15 L2,15 L2,13 Z M16,5 L18,5 L18,7 L16,7 L16,5 Z M16,9 L18,9 L18,11 L16,11 L16,9 Z M16,13 L18,13 L18,15 L16,15 L16,13 Z M8,7 L13,10 L8,13 L8,7 Z" id="Combined-Shape"></path>
          </svg>
        </div>
        <div class="flex-grow">
          <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Online Tutorials</h2>
          <p class="leading-relaxed text-base">Check Out <br> Online Tutorials Related To Jute</p>
          <a class="mt-3 text-indigo-500 inline-flex items-center" href="online-tutorial.php">Learn More
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>


<br><br>



</section>




   

<footer style="background: black; padding: 100px;">
  

    <a href="" style="margin-left: 50px; font-size: 25px; text-decoration: none; color: white; ">Gallery</a>

    <a href="" style="margin-left: 150px; font-size: 25px; text-decoration: none; color: white; ">Feedback</a>


    <a class="logo-word" style="font-weight: bold;"><a class="text-primary" href="index.php" style="font-size: 50px; margin-left: 150px;">Fiber</a><a href="index.php" style="color: white; font-size: 50px; margin-top: 25px;">Cops</a>



      <a href="" style="margin-left: 150px; font-size: 25px; text-decoration: none; color: white; ">Faqs</a>

    <a href="" style="margin-left: 150px; font-size: 25px; text-decoration: none; color: white; ">Contact Us</a>
</footer>


</body>

</html>