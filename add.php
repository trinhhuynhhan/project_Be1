<?php 
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/manufacture.php";
require "models/protype.php";
require "models/information.php";
$info = new Information;
if(isset($_POST['name'])){
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $cccd = $_POST['cccd'];
    //Goi phuong thuc them
    $info->addInfo($name, $dob, $address, $phone, $cccd);
    //add thanh cong su dung header
    header('location:information.php');
}