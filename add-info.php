<?php
include "headercart.php";
?>
<!-- Content Wrapper. Contains page content -->
<div class="container">
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Information</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <form action="add.php" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label for="inputName">Name</label>
                  <input name="name" type="text" id="inputName" class="form-control">
                </div>
                <div class="form-group">
                  <label for="inputdob">Date of bird</label>
                  <input name="dob" id="inputdob" class="form-control" rows="4"></input>
                </div>
                <div class="form-group">
                  <label for="inputprice">Phone</label>
                  <input name="phone" id="inputprice" class="form-control" rows="4"></input>
                </div>
                <div class="form-group">
                  <label for="inputAddress">Address</label>
                  <textarea name="address" id="inputAddress" class="form-control" rows="4"></textarea>
                </div>
                <div class="form-group">
                  <label for="inputProjectLeader">CCCD</label>
                  <input name="cccd" type="text" id="inputProjectLeader" class="form-control">
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

        </div>
        <div class="row">
          <div class="col-12">
            <input type="submit" value="Add" class="btn btn-success float-right">
          </div>
        </div>
      </form>
    </section>
    <!-- /.content -->
  </div>
</div>

<!-- /.content-wrapper -->
<!-- Control Sidebar -->

<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="admin/dist/js/demo.js"></script>
</body>

</html>