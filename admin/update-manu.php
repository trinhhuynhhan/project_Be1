<?php
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/manufacture.php";
require "models/protype.php";
$manu = new Manufacture;

if (isset($_POST['manu_name'])) {
    $manu_name = $_POST['manu_name'];
    $manu_id = $_POST['manu_id'];
    //Goi phuong thuc them
    $manu->updateManu($manu_name,$manu_id);
    header('location:manufactures.php');
}
