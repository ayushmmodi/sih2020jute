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
    <div class="container-scroller">
      <?php include('nav.php'); ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Add Cost </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Cost</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add Cost</li>
                </ol>
              </nav>
            </div>



            <div class="row">


              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add Costing</h4>
                    <p class="card-description"> of your production </p>
                    <form class="forms-sample" action="php/cost.php" method="post">


         
                    
                      <div class="form-group">
                        <label for="exampleInputName1">SEEDS PURCHASED</label>
                        <input type="text" class="form-control" name="seed_bills" id="exampleInputName1" placeholder="Name" required>
                      </div>
                    

                    <div class="form-group">
                        <label for="exampleInputMobile" >WATER BILLS</label>
                         <input type="text" class="form-control" name="water_bills" id="exampleInputMobile" placeholder="Weight" required>
                       
                      </div>

                      <!-- <div class="form-group">
                        <label for="exampleSelectGender">Gender</label>
                        <select class="form-control" id="exampleSelectGender">
                          <option>Male</option>
                          <option>Female</option>
                        </select>
                      </div> -->

                    
                    <div class="form-group">
                        <label for="exampleInputMobile" >ELECTRICITY BILLS</label>
                         <input type="number" class="form-control" name="electricity_bills" id="exampleInputMobile" placeholder="Mobile number" required>
                       
                      </div>

                      <div class="form-group">
                        <label for="exampleInputMobile" >CHEMICAL BILLS</label>
                         <input type="number" class="form-control" name="chemical_bills" id="exampleInputMobile" placeholder="Mobile number" required>
                       
                      </div>
                      <div class="form-group">
                        <label for="exampleInputMobile" >EQUIPMENTS BILLS</label>
                         <input type="number" class="form-control" name="equipments_bills" id="exampleInputMobile" placeholder="Mobile number" required>
                       
                      </div>
                      <div class="form-group">
                        <label for="exampleInputMobile" >TRANSPORT BILLS</label>
                         <input type="number" class="form-control" name="transport_bills" id="exampleInputMobile" placeholder="Mobile number" required>
                       
                      </div>
                      <div class="form-group">
                        <label for="exampleInputMobile" >OTHER (COST AND NARRATION)</label>
                         <input type="number" class="form-control" name="other_cost" id="exampleInputMobile" placeholder="Mobile number" required>
                       
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
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2017 <a href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights reserved.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
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