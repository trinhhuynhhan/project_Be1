<?php
include "header.php";
include "sidebar.php";

?>   
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Product</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Table</h3>
                        <br>
                        <a class="btn btn-success btn-sm" href="product-add.php">
                            <i class="fas fa-plus"></i> Add New Product
                        </a>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-striped projects">
                            <thead>
                                <tr>
                                    <th style="width: 15%">
                                        Image
                                    </th>
                                    <th style="width: 20%" class="text-center">
                                        Name
                                    </th>
                                    <th style="width: 20%" class="text-center">
                                        Price
                                    </th>
                                    <th style="width: 10%" class="text-center">
                                        Manufacture
                                    </th>
                                    <th style="width: 10%" class="text-center">
                                        Protype
                                    </th>
                                    <th style="width: 20%" class="text-center">
                                        Decription
                                    </th>
                                    <th style="width: 30%" class="text-center">
                                        Action
                                    </th>
                                    <th style="width: 20%">
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $getAllProduct = $product->getAllProducts();
                                foreach($getAllProduct as $value):
                                ?>
                                    <tr>
                                        <td>
                                            <img style="width: 100px;" src="../img/<?php echo $value['image'] ?>" alt="">
                                        </td>
                                        <td><?php echo $value['name'] ?></td>
                                        <td style="text-align: center;"><?php echo number_format($value['price']) ?> VNĐ</td>
                                        <td style="text-align: center;"><?php echo $value['manu_name'] ?></td>
                                        <td style="text-align: center;"><?php echo $value['type_name'] ?></td>
                                        <td><?php echo substr($value['description'], 0, 50) ?>...</td>
                                        <td class="project-actions text-right">
                                            <a class="btn btn-info btn-sm" href="product-edit.php?id=<?php echo $value['id']?>">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Edit
                                            </a>
                                            <a class="btn btn-danger btn-sm" href="product-del.php?id=<?php echo $value['id'] ?>">
                                                <i class="fas fa-trash">
                                                </i>
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
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