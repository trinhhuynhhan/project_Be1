<?php 
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/manufacture.php";
require "models/protype.php";
$protype = new Protype;
if(isset($_POST['name'])){
    $name = $_POST['name'];
    //Goi phuong thuc them
    $protype->addProtype($name);
    //add thanh cong su dung header
    header('location:protypes.php');
}