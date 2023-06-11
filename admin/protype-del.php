<?php
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/manufacture.php";
require "models/protype.php";

$type = new Protype;
if (isset($_GET['type_id'])) {
    $type_id = $_GET['type_id'];

    //Goi phuong thuc xoa
    $type->delProtype($type_id);
    header('location:protypes.php');
}
