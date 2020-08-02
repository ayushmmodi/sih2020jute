

<!DOCTYPE html>
<html>
<head>
	<title></title>




  <link rel="stylesheet" href="../css/style-index.css" />
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
  <link rel="shortcut icon" href="./doctor-dashboard/assets/images/logo-mini.png" />
  <script src="https://kit.fontawesome.com/d12a5234ba.js" crossorigin="anonymous"></script>
     
</head>




<body>


<div id="navbar" class="navbar" style="background: black;">
      <div class="logo">
       <!-- <img src="./images/logo.png" alt="logo" height="110" width="110" /> -->
        <a class="logo-word" style="font-weight: bold;"><a class="text-primary" href="../index.php" style="font-size: 50px; margin-top: 25px;">Fiber</a><a href="../index.php" style="color: white; font-size: 50px; margin-top: 25px;">Cops</a>
      </div>
      <ul class="nav-list">
        <li class="nav-li list">
          <a class="current" href="./index.php">Home</a>
        </li>
        <li class="nav-li list"><a href="../about.html">About Us</a></li>
       
        <li class="nav-li list"><a href="../statue.php">Statute</a></li>
        <li class="nav-li list"><a href="#">Data And Stats</a></li>
     

             <li class="nav-li list"> <a href="login.php" data-toggle="modal" data-target="#employee-login-modal" >
                                      Login
                        </a></li>

             <li class="nav-li list"> <a href="register.php" data-toggle="modal" data-target="#employee-login-modal" >
                                      Registration
                        </a></li>




            
      </ul>
    </div>


     


      <!-- Modal
<div class="modal fade" id="user-login-modal" tabindex="-1" role="dialog" aria-labelledby="user-login-modal" aria-hidden="true" style="margin-top: 5%;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Select One</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="al">
        

        <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
        <h1 class="text-gray-900 text-lg title-font font-medium mb-2" style="font-weight: bolder;">Login</h1>
        <p class="leading-relaxed text-base"></p>
        <a class="mt-3 text-indigo-500 inline-flex items-center" href="../user-login.php">Click Here
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
    </div><br><br>
    <div class="flex items-center lg:w-3/5 mx-auto border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
      <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
        <h2 class="text-gray-900 text-lg title-font font-medium mb-2" style="font-weight: bolder;">Register</h2>
        <p class="leading-relaxed text-base"></p>
        <a class="mt-3 text-indigo-500 inline-flex items-center" href="../user-register.php">Click Here
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" >Close</button>
        
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="employee-login-modal" tabindex="-1" role="dialog" aria-labelledby="employee-login-modal" aria-hidden="true" style="margin-top: 5%;">
        <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Select One</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="al">

      <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
        <h1 class="text-gray-900 text-lg title-font font-medium mb-2" style="font-weight: bolder;">Employee Login</h1>
        <p class="leading-relaxed text-base"></p>
        <a class="mt-3 text-indigo-500 inline-flex items-center" href="../administration_login.php">Click Here
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
    </div><br><br>
    <div class="flex items-center lg:w-3/5 mx-auto border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
      <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
        <h2 class="text-gray-900 text-lg title-font font-medium mb-2" style="font-weight: bolder;">Admin Login</h2>
        <p class="leading-relaxed text-base"></p>
        <a class="mt-3 text-indigo-500 inline-flex items-center" href="../admin_login.php">Click Here
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
      
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="employee-reg-modal" tabindex="-1" role="dialog" aria-labelledby="employee-reg-modal" aria-hidden="true" style="margin-top: 5%;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Select One</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="al">
        

        <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
        <h1 class="text-gray-900 text-lg title-font font-medium mb-2" style="font-weight: bolder;">Mill Worker Registration</h1>
        <p class="leading-relaxed text-base"></p>
        <a class="mt-3 text-indigo-500 inline-flex items-center" href="../reg/mill-worker-reg.php">Click Here
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
    </div><br><br>
    <div class="flex items-center lg:w-3/5 mx-auto border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
      <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
        <h2 class="text-gray-900 text-lg title-font font-medium mb-2" style="font-weight: bolder;">Farmers Registration</h2>
        <p class="leading-relaxed text-base"></p>
        <a class="mt-3 text-indigo-500 inline-flex items-center" href="../reg/farmer-reg.php">Click Here
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>


      </div>
    </div>
  </div>
</div>




<div class="modal fade" id="admin-panel-modal" tabindex="-1" role="dialog" aria-labelledby="admin-panel-modal" aria-hidden="true" style="margin-top: 5%;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Select One</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="al">
        

        <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
        <h1 class="text-gray-900 text-lg title-font font-medium mb-2" style="font-weight: bolder;">Mill Worker Table</h1>
        <p class="leading-relaxed text-base"></p>
        <a class="mt-3 text-indigo-500 inline-flex items-center" href="../milltableselect.php">Click Here
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
    </div><br><br>
    <div class="flex items-center lg:w-3/5 mx-auto border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
      <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
        <h2 class="text-gray-900 text-lg title-font font-medium mb-2" style="font-weight: bolder;">Farmer's Table</h2>
        <p class="leading-relaxed text-base"></p>
        <a class="mt-3 text-indigo-500 inline-flex items-center" href="../farmertable.php">Click Here
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>



</div>
    </div>
  </div>
</div>
 -->





<section class="text-gray-700 body-font overflow-hidden">
  <div class="container px-5 py-24 mx-auto">
    <div class="-my-8">
      <div class="py-8 flex flex-wrap md:flex-no-wrap">
      	<div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900" style="font-weight: bold;">Acts</h1>
    </div>
        
    
      </div>
      <div class="py-8 flex border-t-2 border-gray-200 flex-wrap md:flex-no-wrap">
      <div class="md:flex-grow">
         
        
         <a class="text-indigo-500 inline-flex items-center mt-4" href="..\documents\acts\JPM Act - Notification for Percentage of Reservation.pdf" target="_blank" style="font-weight: bold; font-size: 90%;">JPM Act - Notification for Percentage of Reservation
           
         </a>
       </div></div>
      <div class="py-8 flex border-t-2 border-gray-200 flex-wrap md:flex-no-wrap">
        
        <div class="md:flex-grow">
         
          
          <a class="text-indigo-500 inline-flex items-center mt-4" href="..\documents\acts\Press release-Extension of Norms for Mandatory Packaging in Jute Materials.pdf" target="_blank" style="font-weight: bold; font-size: 90%;"  >Press release-Extension of Norms for Mandatory Packaging in Jute Materials
            
          </a>
        </div>
      </div>
      <div class="py-8 flex border-t-2 border-gray-200 flex-wrap md:flex-no-wrap"><div class="md:flex-grow">
         
          
          <a class="text-indigo-500 inline-flex items-center mt-4" href="..\documents\acts\National Jute Board ACT 2008.pdf" target="_blank" style="font-weight: bold; font-size: 90%;">National Jute Board ACT 2008
            
          </a>
        </div>
      </div>
      <div class="py-8 flex border-t-2 border-gray-200 flex-wrap md:flex-no-wrap">
      	<div class="md:flex-grow">
         
        
          <a class="text-indigo-500 inline-flex items-center mt-4" href="..\documents\acts\Jute Packaging Materials (Compulsory Use in Packing Commodities) Act 1987.pdf
          " target="_blank" style="font-weight: bold; font-size: 90%;">Jute Packaging Materials (Compulsory Use in Packing Commodities) Act 1987
            
          </a>
        </div>
      </div>
      <div class="py-8 flex border-t-2 border-gray-200 flex-wrap md:flex-no-wrap">

      	<div class="md:flex-grow">
         
          
          <a class="text-indigo-500 inline-flex items-center mt-4" href="..\documents\acts\JMDC ACT 1983.pdf" target="_blank" style="font-weight: bold; font-size: 90%;">JMDC ACT 1983
          </a>
        </div>
      </div>
      <div class="py-8 flex border-t-2 border-gray-200 flex-wrap md:flex-no-wrap">

      	<div class="md:flex-grow">
         
          
          <a class="text-indigo-500 inline-flex items-center mt-4" href="Jute Manufacturers Cess Act 1983" target="_blank" style="font-weight: bold; font-size: 90%;">Jute Manufacturers Cess Act 1983
            
          </a>
        </div>
      </div>
      <div class="py-8 flex border-t-2 border-gray-200 flex-wrap md:flex-no-wrap">
    </div>
  </div>
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