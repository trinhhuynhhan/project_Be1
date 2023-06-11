<?php
include "header.php";
include "sidebar.php";

if (isset($_GET['id'])) :
  $id = $_GET['id'];
  $edit = $product->getProductById($id);
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Update Edit</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <form action="update-product.php" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">General</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Name</label>
                <input type="hidden" name="id" value="<?php echo $edit[0]['id'] ?>">
                <input value="<?php echo $edit[0]['name'] ?>" name="name" type="text" id="inputName" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputprice">Price</label>
                <input value="<?php echo $edit[0]['price'] ?>" type="text" name="price" id="text" class="form-control" >
              </div>
              <div class="form-group">
                <label for="inputName">Image</label>
                <input name="image" type="file" id="inputName" class="form-control">
                <img style=300px src="../img/<?php echo $edit[0]['image'] ?>" alt="">
              </div>
              <div class="form-group">
                <label for="inputDescription">Description</label>
                <textarea name="description" id="inputDescription" class="form-control" rows="4">
                <?php echo $edit[0]['description'] ?>
              </textarea>
              </div>
              <div class="form-group">
                <label for="inputprotype">Manufacture</label>
                <select name="manufacture" id="inputprotype" class="form-control custom-select">
                  <option selected disabled>Select one</option>
                  <?php
                  $getAllManufacture = $manu->getAllManufactures();
                  foreach ($getAllManufacture as $value) :
                    if ($value['manu_id'] == $edit[0]['manu_id']) :
                  ?>
                      <option selected value="<?php echo $value['manu_id'] ?>"><?php echo $value['manu_name'] ?></option>
                    <?php else : ?>
                      <option value="<?php echo $value['manu_id'] ?>"> <?php echo $value['manu_name'] ?> </option>
                  <?php endif;
                  endforeach; ?>
                </select>
              </div>
              <div class="form-group">
                <label for="inputprotype">Protype</label>
                <select name="protype" id="inputprotype" class="form-control custom-select">
                  <option selected disabled>Select one</option>
                  <?php
                  $getAllProtype = $type->getAllProtypes();
                  foreach ($getAllProtype as $value) :
                    if ($value['type_id'] == $edit[0]['type_id']) :
                  ?>
                      <option selected value="<?php echo $value['type_id'] ?>"><?php echo $value['type_name'] ?></option>
                    <?php else : ?>
                      <option value="<?php echo $value['type_id'] ?>"> <?php echo $value['type_name'] ?> </option>
                  <?php endif;
                  endforeach; ?>
                </select>
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Feature</label>
                <?php if ($edit[0]['feature'] == 1) :?>
                <input checked name="feature" type="checkbox" id="inputProjectLeader" class="form-control">
                <?php 
                else:
                ?>
                <input name="feature" type="checkbox" id="inputProjectLeader" class="form-control">
                <?php endif; ?>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>

      </div>
      <div class="row">
        <div class="col-12">
          <input type="submit" value="Update Product" class="btn btn-success float-right">
        </div>
      </div>
    </form>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer>

</footer>
<?php endif; ?>
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>

</html>