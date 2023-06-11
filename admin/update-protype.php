<?php
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/manufacture.php";
require "models/protype.php";
$type = new Protype;

if (isset($_POST['type_name'])) {
    $type_name = $_POST['type_name'];
    $type_id = $_POST['type_id'];
    //Goi phuong thuc them
    $type->updateProtype($type_name,$type_id);
    header('location:protypes.php');
}
