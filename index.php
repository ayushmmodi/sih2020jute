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
    <?php include("navbar.php"); ?>
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
 

<?php  include("footer.php"); ?>


</body>

</html>