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
              <h3 class="page-title"> Add Sell </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Sell</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add Sell</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add Selling</h4>
                    <p class="card-description"> of your production </p>
                    <form class="forms-sample">
                      <div class="form-group">
                        <label for="exampleInputName1">Mill Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                      </div>

                      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                    <script>
                      $(document).ready(function(){
      //function to calculate total
     
      $('#inpc').keyup(function(){
         var kgcal =  $('#inpc').val();
         var sum = (kgcal *4*9.81)/(3.1415*(0.0175^2));
             $("#test1").text("strength : "+sum);
      });
});
                    </script>
                    <div class="form-group">
                        <label for="exampleInputMobile" >Weight</label>
                         <input type="number" class="form-control" id="inpc" placeholder="Weight">                     
                      </div>
<p id="test1"></p>
                    <div class="form-group">
                        <label for="exampleInputMobile" >Price</label>
                         <input type="text" class="form-control" id="exampleInputMobile" placeholder="Mobile number">
                       
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Textarea</label>
                        <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                      </div>
                      <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
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