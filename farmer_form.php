<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>FiberCops</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />


  </head>
  <body>


  <?php 

  $displayform = True;
  if(isset($_POST['submit'])){

    $displayform = false;

  }


  if ($displayform)
  {

    ?>
    <div class="container-scroller">
  
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Farmer's Details </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Details</a></li>
                  <li class="breadcrumb-item active" aria-current="page">farmer's details</li>
                </ol>
              </nav>
            </div>



            <div class="row">


              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Farmer's Details</h4>
                    <p class="card-description"> Fill Your Details </p><br>
                    <form class="forms-sample" action="dashboard.php" method="post">
                    <h3 class="page-title"> Account Details </h3><br>
                      <div class="form-group">
                        <label for="exampleInputName1">BANK NAME</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Bank Name">
                      </div>
                    
                      <div class="form-group">
                        <label for="exampleInputMobile" >BRANCH NAME</label>
                         <input type="text" class="form-control" id="exampleInputMobile" placeholder="Branch Name">
                       
                      </div>
                    <div class="form-group">
                        <label for="exampleInputMobile" >IFSC CODE</label>
                         <input type="text" class="form-control" id="exampleInputMobile" placeholder="IFSC CODE">
                       
                      </div>

                      <div class="form-group">
                        <label for="exampleInputMobile" >ACCOUNT NUMBER</label>
                         <input type="text" class="form-control" id="exampleInputMobile" placeholder="Account Number">
                       
                      </div><br>
                      <!-- <div class="form-group">
                        <label for="exampleSelectGender">Gender</label>
                        <select class="form-control" id="exampleSelectGender">
                          <option>Male</option>
                          <option>Female</option>
                        </select>
                      </div> -->

                      <h3 class="page-title"> Other Details </h3><br>
                    <div class="form-group">
                        <label for="exampleInputMobile" >YOUR YEARLY INCOME</label>
                         <input type="text" class="form-control" id="exampleInputMobile" placeholder="Yearly Income">
                       
                      </div>

                      <div class="form-group">
                        <label for="exampleInputMobile" >FARMING FROM (year):</label>
                         <input type="date" class="form-control" id="exampleInputMobile" placeholder="Yearly Income">
                       
                      </div>

                      <div class="form-group">
                        <label for="exampleInputMobile" >LAND AREA OF FARMING (in ACRE)</label>
                         <input type="text" class="form-control" id="exampleInputMobile" placeholder="Your land area in acres">
                       
                      </div>
                      
                      <button type="submit" name="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
  

          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div><?php } ?>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>
