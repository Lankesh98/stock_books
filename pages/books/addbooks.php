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

        <script>
          $("#yop").datepicker({
              format: "yyyy",
              viewMode: "years", 
              minViewMode: "years"
          });
        </script>
        <!-- Begin Page Content -->
        <div class="container-fluid">
        <div class="row">

<div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10 offset-0 offset-sm-0 offset-md-0 offset-lg-1 offset-xl-1">

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">
        Add New Books
      </h6>
    </div>

    <div class="card-body">
      
     <form id="insertBook" action="crud/insert.php" method="POST" enctype='multipart/form-data'>
       
       <div class="row">
         
          <div class="col-12 col-md-6">                      
            <div class="form-group">
              <label for="">Book Title</label>
              <input 
                type="text" 
                name="bname"                          
                class="form-control"
                required="" 
              >
            </div>
          </div>

          <div class="col-12 col-md-6">                      
            <div class="form-group">
              <label for="">Author Name</label>
              <select 
                type="text" 
                name="aname"                          
                class="form-control"
                required="" 
              >
              <option>Select Author Name</option>
              <?php
                include_once "../../coection/connection.php";
                $sql = "SELECT * FROM author ";
                $result = mysqli_query($con,$sql);
                $row = mysqli_num_rows($result);

                while ($array = mysqli_fetch_assoc($result)) {
                    ?>
                <option value="<?php echo $array['aut_id']?>"><?php echo $array['author']?></option>
                <?php
                }
                ?>
              ?>
              </select>
            </div>
          </div>

          <div class="col-12 col-md-6">                      
            <div class="form-group">
              <label for="">Author Name</label>
              <select 
                type="text" 
                name="cname"                          
                class="form-control"
                required="" 
              >
              <option>Select Author Name</option>
              <?php
                include_once "../../coection/connection.php";
                $sql = "SELECT * FROM category ";
                $result = mysqli_query($con,$sql);
                $row = mysqli_num_rows($result);

                while ($array = mysqli_fetch_assoc($result)) {
                    ?>
                <option value="<?php echo $array['cat_id']?>"><?php echo $array['cat_name']?></option>
                <?php
                }
                ?>
              ?>
              </select>
            </div>
          </div>

          <div class="col-12 col-md-6">                      
            <div class="form-group">
              <label for="">Year of Publish</label>
              <div class='input-group date' >                                             
              <select class="form-control" name="yop">
                <?php
                  for ($year = (int)date('Y'); 1900 <= $year; $year--): ?>
                    <option value="<?=$year;?>"><?=$year;?></option>
                <?php endfor; ?>
              </select>
              </div>
            </div> 
          </div>

          <div class="col-12 col-md-6">                      
            <div class="form-group">
              <label for="">Price</label>
              <input 
                type="text" 
                name="price"                          
                class="form-control"
                required="number_format"
              >
            </div>
          </div>



          <div class="col-12 col-md-6">                      
            <div class="form-group">
              <label for="">ISBN</label>
              <input 
                type="text" 
                name="isbn"                          
                class="form-control"
                required="" 
              >
            </div>
          </div>

          <div class="col-12 col-md-6">                      
            <div class="form-group">
              <label for="">Medium</label>
              <SELECT 
                type="text" 
                name="medium"                          
                class="form-control"
                required="" 
              >
              <option value="English">English</option>
              <option value="Tamil">Tamil</option>
              <option value="Sinhala">Sinhala</option>
              </SELECT>
            </div>
          </div>

          <div class="col-12 col-md-6">                      
            <div class="form-group">
              <label for="">Image</label>
              <input 
                type="file" 
                name="file"                          
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

<script src="js/yearpicker.js"></script>
    <script>
      $(document).ready(function() {
        $(".yearpicker").yearpicker({
          year: 2020,
          startYear: 1950,
          endYear: 2050
        });
      });
    </script>

       
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