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
    <div class="main-panel">
		<div class="content-wrapper">
				
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

             $(document).ready(function(){
      //function to calculate total
     
      $('#rej').click(function(){
         $('#proBanner').hide();
      });

         $('#accreq').click(function(){
         $('#proBanner').hide();
      });


});

</script>
				<div class="row" id="proBanner">
				  <div class="col-12">
					<span class="d-flex align-items-center purchase-popup">
					<table>
					  <tr>
					  <td style="width:500px">
					  Ayush Jutewala
					  </td>
					 <td style="width:500px">
					  <a href="verfdoc.php?id=ff" target="_blank">Verify Documents</a>
					  </td>
					  <td style="width:500px">
					  <a href="#" id="rej" class="btn btn-gradient-danger btn-fw">Deny</a>
					  <a href="acceptfarmer.php" id="accreq" target="_blank" class="btn purchase-button">Accept</a>
					  </td>
					  </tr>
					  <i class="mdi mdi-close" id="bannerClose"></i>
					  
					  </table>
					</span>
				  </div>
				</div>
				
				
          
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          
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