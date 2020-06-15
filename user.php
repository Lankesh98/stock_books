<!DOCTYPE html>
<html lang="en">

<head>
<?php
include_once "layers/head.php";
?>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php
      include_once "layers/sidebar.php";
    ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
       <?php
          include_once "layers/topbar.php";
       ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
        <?php
            include_once "connection/connection.php";

            $sql = "SELECT * FROM books 
            INNER JOIN author on author.aut_id = books.aut_id ";
            $result = mysqli_query($con,$sql);
            $row = mysqli_num_rows($result);


        ?>
          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Book Details</h1>
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Book Title</th>
                      <th>Book Author</th>
                      <th>Book Price</th>
                      <th>Book Image</th>
                      <th>Action Links</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                  while ($row = mysqli_fetch_assoc($result)) 
                     { 
                        $bid = $row['b_id'];
                        $bname = $row['b_name'];
                        $aname = $row['author'];
                        $price  = $rowe['price'];
                        $img  = $row['image'];
                                             
                      
                  ?>
                    <tr>
                      <td><?php echo $bname ?></td>
                      <td><?php echo $aname ?></td>
                      <td><?php echo $price ?></td>
                      <td><img src=<?php echo $img ?>></td>
                      <td>
                          <a href="crud/delete.php?id=<?php echo $row['customer_id']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                          <a href="view-single.php?id=<?php echo $row['customer_id']; ?>" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                          <a href="edit.php?id=<?php echo $row['customer_id']; ?>" class="btn btn-secondary"><i class="fa fa-edit"></i></a>
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
      <!-- End of Main Content -->

      <!-- Footer -->
     
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->
    <?php
     include_once "layers/footer.php";
     ?>
  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <?php
  include_once "layers/scripts.php";
  ?>

</body>

</html>
