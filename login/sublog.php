<?php
require "../config.php";
require "../models/db.php";
require "../models/user.php";
$user = new User;
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role_id = $_POST['role_id'];
    if ($user->checkLogin($username, $password) && $user->getUserByRole($role_id) != 1) {
        $_SESSION['user'] = $username;
        header('location:../index.php');
    } else if($user->getUserByRole($role_id) != 0){
        $_SESSION['user'] = $username;
        header('location:../admin/index.php');
    }else{
        header('location:login.php');
    }
}
