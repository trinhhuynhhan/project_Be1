<?php 
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/manufacture.php";
require "models/protype.php";
$product = new Product;
if(isset($_POST['first-name'])){
    $first = $_POST['first-name'];
    $last = $_POST['last-name'];
    $email = $_FILES['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $zip = $_POST['zip-code'];
    $tel = $_POST['tel'];
    //Goi phuong thuc them
    $product->addBilling($first,$last,$email,$address,$city,$country,$zip,$tel);
    //add thanh cong su dung header
    header('location:checkout.php');
}