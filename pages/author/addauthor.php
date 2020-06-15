<?php
include_once "../../connection/connection.php";
session_start();
if( $_SESSION['email']=='')
{
	header("location:index.php");
}
else
{
?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php
include_once "../../layers/head.php";
?>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php
      include_once "../../layers/sidebar.php";
    ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
       <?php
          include_once "../../layers/topbar.php";
       ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
        <div class="row">

<div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10 offset-0 offset-sm-0 offset-md-0 offset-lg-1 offset-xl-1">

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">
        Add New Author
      </h6>
    </div>

    <div class="card-body">
      
     <form action="crud/insert.php" method="POST">
       
       <div class="row">
         
          <div class="col-12">                      
            <div class="form-group">
              <label for="">Author Name</label>
              <input 
                type="text" 
                name="aname"                          
                class="form-control"
                required="" 
              >
            </div>
          </div>

          <div class="col-12">
            <div class="form-group">
              <input 
                type="submit" 
                class="form-control btn btn-primary"
                value="SEND" 
              >
            </div>
          </div>

       </div>

     </form>


    </div>

  </div>

</div>

</div>


       
            </div>
          </div>

        </div>
        </div>
        <!-- /.container-fluid -->

      </div>
                    </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php
     include_once "../../layers/footer.php";
     ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->
    
  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->




  <?php
  include_once "../../layers/logoutmodal.php";
  include_once "../../layers/scripts.php";
  ?>

</body>

</html>
<?php
}
?>