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
				<div class="row" id="proBanner">
                     <div class="card col-lg-9" >
                        <div class="card-body">
                           <h4 class="card-title">Pending verfications</h4>
                           <table class="table table-hover">
                              <thead>
                                 <tr>
                                    <th>Name</th>
                                    <th></th>
                                 </tr>
                              </thead>
                              <?php
                                 $conn = mysqli_connect("localhost", "root", "", "fiber_cops");
                                      // Check connection
                                 if ($conn->connect_error)
                                 {
                                 die("Connection failed: " . $conn->connect_error);
                                 }
                                 $sql = "SELECT * FROM user";
                                 $result = $conn->query($sql);
                                 if ($result->num_rows > 0)
                                 {
                                 // output data of each row
                                 while ($row = $result->fetch_assoc())
                                 {
								 echo "<tr>
								 <td>" . $row["first_name"] . "  ". $row["last_name"] ."</td>
								 </tr>";
                                 }
                                 echo "</table>";
                                 }
                                 else
                                 {
                                 echo "0 results";
                                 }
                                 $conn->close();
                                 ?>  
                           </table>
                        </div>
                     </div>
                  </div>
				  </div>
                  </div>
		<!-- <div class="content-wrapper">

<td>" . $row['<a href='compname'><a>'] . "</td>

<td><a href="Test.php?'.$Row['UserID'].'">'.$Row['Sale Amount'].'</a>' . "$".round($Row['Sale Amount']) . '</td>

				<div class="row" id="proBanner">
				  <div class="col-12">
					<span class="d-flex align-items-center purchase-popup">
					<table>
					  <tr>
					  <td style="width:500px">
					  Kantilal Bodh
					  </td>
					  <td style="width:500px">
					  <a href="verifydoc.php" id ="check11" target="_blank">Verify Documents</a>
					  </td>
					  <td id ="data1" style="width:500px; display:none">
					 Verified
					  </td>
					  </tr>
					  <i class="mdi mdi-close" id="bannerClose"></i>
					  
					  </table>
					</span>
				  </div>
				</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

             $(document).ready(function(){
      //function to calculate total
     
      $('#check11').click(function(){
         $('#data1').show();
      });
});

</script>
          
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