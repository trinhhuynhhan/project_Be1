<?php
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/manufacture.php";

$manu = new Manufacture;
if (isset($_GET['manu_id'])) {
    $manu_id = $_GET['manu_id'];

    //Goi phuong thuc xoa
    $manu->delManu($manu_id);
    header('location:manufactures.php');
}
