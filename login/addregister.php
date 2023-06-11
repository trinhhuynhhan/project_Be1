<?php
require "../config.php";
require "../models/db.php";
require "../models/user.php";
$user = new User;
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $check = $_POST['check'];
    if($password == $check){
        $user->addregister($username, $password);
       header('location:../index.php');
    }
}