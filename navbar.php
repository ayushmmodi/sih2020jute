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
        <?php if(!isset($_SESSION['adminismail']) && !isset($_SESSION['adminmail']) && !isset($_SESSION['infor']))
          {

          echo '

             <li class="nav-li list"> <a href="administration_login.php" data-toggle="modal" data-target="#employee-login-modal" >
                                      Employee Login
                        </a></li>';

            }?>



             <?php if(isset($_SESSION['adminismail']))
          {

          echo '

             <li class="nav-li list"> <a href="logout.php" data-toggle="modal" data-target="#employee-login-modal" >
                                      Registration
                        </a></li>';

            }?>

            <?php if(isset($_SESSION['adminmail']))
          {

          echo '

             <li class="nav-li list"> <a href="dashboard.html" data-toggle="modal" data-target="#employee-login-modal" >
                                      Dashboard
                        </a></li>';

            }?>

            <?php if(isset($_SESSION['adminismail']) || isset($_SESSION['adminmail']) || isset($_SESSION['infor']))
          {

          echo '

             <li class="nav-li list"> <a href="logout.php" data-toggle="modal" data-target="#employee-login-modal" >
                                      Log Out
                        </a></li>';

            }?>
      </ul>
    </div>