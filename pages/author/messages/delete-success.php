<!DOCTYPE html>
<html lang="en">

<head>
 <?php include '../../../layers/head.php'; ?>
</head>

<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">
    <?php include '../../../layers/sidebar.php'; ?>
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">
        <?php include '../../../layers/topbar.php'; ?>
        <!-- Begin Page Content -->
        <div class="container-fluid">
        <!-- Contents Start -->

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Success</h6>
          </div>
          <div class="card-body">
            
              
              <div class="alert alert-success" role="alert">
                  <strong>Well done!</strong> You successfully delete this Author.

                  <h3>
                    Redirecting to Author after <span id="countdown">5</span> seconds
                  </h3>

              </div>

              <!-- Modify this according to your requirement -->
              
              <!-- JavaScript part -->
              <script type="text/javascript">
                  
                  // Total seconds to wait
                  var seconds = 5;
                  
                  function countdown() {
                      seconds = seconds - 1;
                      if (seconds < 0) {
                          // Chnage your redirection link here
                          window.location = "../index.php";
                      } else {
                          // Update remaining seconds
                          document.getElementById("countdown").innerHTML = seconds;
                          // Count down using javascript
                          window.setTimeout("countdown()", 1000);
                      }
                  }
                  
                  // Run countdown function
                  countdown();
                  
              </script>



          </div>
        </div>









        
        <!-- Contents End -->
          

        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->
     <?php include '../../../layers/footer.php'; ?>
    </div>
    <!-- End of Content Wrapper -->
  </div>
  <!-- End of Page Wrapper -->
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <?php include '../../../layers/scripts.php'; ?>
</body>
</html>
