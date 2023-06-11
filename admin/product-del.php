<?php
require "config.php";
require "models/db.php";
require "models/product.php";

$product = new Product;
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    //Goi phuong thuc xoa
    $product->delProduct($id);
    header('location:products.php');
}
