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
        <?php
            include_once "../../connection/connection.php";

            $sql = "SELECT * FROM author ";
            $result = mysqli_query($con,$sql);
            $row = mysqli_num_rows($result);


        ?>
          <!-- Page Heading -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Author Details</h6>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Author ID</th>
                      <th>Author Name</th>
                      <th>Action Links</th>


                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                  while ($row = mysqli_fetch_assoc($result)) 
                     { 
                        $aid = $row['aut_id'];
                        $aname = $row['author'];

                       
                                             
                      
                  ?>
                    <tr>
                      
                      <td><?php echo $aid ?></td>
                      <td><?php echo $aname ?></td>
                      <td>
                          <span id="myBtn" class="btn btn-secondary" data-toggle="modal" onclick="EditAut('<?php echo $aid;?>','<?php echo $aname;?>')"><i class="fa fa-edit"></i><a href="javascript:void(0)"></a></span>
                          <span id="myBtn2" class="btn btn-primary" data-toggle="modal" onclick="ViewAut('<?php echo $aid;?>','<?php echo $aname;?>')"><i class="fa fa-eye"></i><a href="javascript:void(0)"></a></span>
                          <a href="crud/delete.php?id=<?php echo $aid; ?>" class="btn btn-danger" Onclick="ConfirmDelete()"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                    <?php
                     }
                    ?>

                  </tbody>

                </table>
                <button class="btn btn-primary"><i class="fa fa-plus"></i></button>

              </div>
            </div>
          </div>

        </div>
        </div>
        <!-- /.container-fluid -->

      </div>
                    </div>
      <!-- End of Main Content -->
      <script>
    function ConfirmDelete()
    {
      confirm("Are you sure you want to delete this category?");
    }
  </script>

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

  <script>
  
  function ViewAut(nm,str) {
  var aid = nm;
  var aname = str;
  $(".row #aut_id").val( aid );
  $(".row #aname").val( aname );
  $('#view').modal('show');
  
  }
</script>

<!-- View Modal-->
<div class="modal" id="view" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title">View Author Details</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>

    <div class="modal-body">    
     <div class="row 2">
       
        <div class="col-12">                      
          <div class="form-group">

          <input 
              type="hidden"
              id="aut_id"
              name="aut_id"                          
              class="form-control"
              value=""
              
            >
            <label for="">Category Name</label>
            <input 
              type="text" 
              id="aname"
              name="aname"                          
              class="form-control"
              value=""
              protected=""
            >
          </div>
        </div>

     </div>

  

  </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
    </form>
  </div>
</div>
</div>

<script>
  
    function EditAut(nm,str) {
    var aid = nm;
    var aname = str;
    $(".row #aut_id").val( aid );
    $(".row #aname").val( aname );
    $('#edit').modal('show');
    
    }
  </script>

  <!-- Edit Modal-->
  <div class="modal" id="edit" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Author Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
      <form action="crud/edit.php" method="POST">
    
       <div class="row">
         
          <div class="col-12">                      
            <div class="form-group">

            <input 
                type="hidden"
                id="aut_id"
                name="aut_id"                          
                class="form-control"
                value=""
              >
              <label for="">Category Name</label>
              <input 
                type="text" 
                id="aname"
                name="aname"                          
                class="form-control"
                value=""
              >
            </div>
          </div>

       </div>

    

    </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>

  <?php

  include_once "../../layers/logoutmodal.php";
  include_once "../../layers/scripts.php";
  
  ?>

</body>

</html>
<?php
}
?>