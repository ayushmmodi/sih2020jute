<?php
session_start(); ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FiberCops</title>
  <link rel="stylesheet" href="./css/style-index.css" />

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
        <li class="nav-li list"><a href="./login.php">Statute</a></li>
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
  <section id="first-be">
    <div class="first-bel"> 
      <p class="first-he">Our Services</p>
      <div class="first-line">
        <div class="second-line">
          <div class="first-img">
            <div class="nolinear">
              <div>
                <img class="logo-firsts" src="./images/sheet.png" alt="healthy-tooth" width="50px" />
              </div>
              <div class="linear">
                <a class="first-head" href="Statue.php" style="font-weight: bolder;">Statue</a>
                <p>
                  Acts/Orders/Rules/policy
                </p>
              </div>
            </div>
          </div>
          <div class="first-img">
            <div class="nolinear">
              <div>
                <img class="logo-firsts" src="./images/sky.png" alt="healthy-tooth" width="50px" />
              </div>
              <div class="linear">
                <a class="first-head" href="#" style="font-weight: bolder;">Weather</a>
                <p>
                  Check Out  <br />Weather Of Your State
                </p>
              </div>
            </div>
          </div>
          <div class="first-img">
            <div class="nolinear">
              <div>
                <img class="logo-firsts" src="./images/folder.png" alt="healthy-tooth" width="50px" />
              </div>
              <div class="linear">
                <a class="first-head" href="#" style="font-weight: bolder;">Data And Stats</a>
                <p>
                  Where did it go? <br />Don't worry, we have one more.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="second-line">
          <div class="first-img">
            <div class="nolinear">
              <div>
                <img class="logo-firsts" src="./images/computer.png" alt="healthy-tooth" width="50px" />
              </div>
              <div class="linear">
                <a class="first-head" href="#" style="font-weight: bolder;">Online Tutorials</a>
                <p>
                 Watch <br />Online videos to know<br /> more about jute.
                
                </p>
              </div>
            </div>
          </div>


           <div class="first-img">
            <div class="nolinear">
              <div>
                <img class="logo-firsts" src="./images/strong.png" alt="healthy-tooth" width="50px" />
              </div>
              <div class="linear">
                <a class="first-head" href="#" style="font-weight: bolder;">Strenght Check</a>
                <p>
                 Check Out <br />Stregth Of Your Jute.
                
                </p>
              </div>
            </div>
          </div>
          
          <div class="first-img">
            <div class="nolinear">
              <div>
                <img class="logo-firsts" src="./images/brain.png" alt="healthy-tooth" width="50px" />
              </div>
              <div class="linear">
                <a class="first-head" href="#" style="font-weight: bolder;">Knowledge Bank</a>
                 <p>
                   Know More About Jute <br />
                </p>
              </div>
            </div>
          </div>
       
        </div></div>
      </div>
    </div>
  </section>
 

<footer style="background: black; padding: 100px;">
  

    <a href="" style="margin-left: 150px; font-size: 35px; text-decoration: none; color: white; ">Gallery</a>

    <a href="" style="margin-left: 250px; font-size: 35px; text-decoration: none; color: white; ">Feedback</a>


    <a class="logo-word" style="font-weight: bold;"><a class="text-primary" href="index.php" style="font-size: 50px; margin-left: 200px;">Fiber</a><a href="index.php" style="color: white; font-size: 50px; margin-top: 25px;">Cops</a>



      <a href="" style="margin-left: 200px; font-size: 35px; text-decoration: none; color: white; ">Gallery</a>

    <a href="" style="margin-left: 250px; font-size: 35px; text-decoration: none; color: white; ">Feedback</a>

</footer>


</body>

</html>