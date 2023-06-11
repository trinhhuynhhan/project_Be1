<?php 
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/manufacture.php";
require "models/protype.php";
$manu = new Manufacture;
if(isset($_POST['name'])){
    $name = $_POST['name'];
    //Goi phuong thuc them
    $manu->addManu($name);
    //add thanh cong su dung header
    header('location:manufactures.php');
}