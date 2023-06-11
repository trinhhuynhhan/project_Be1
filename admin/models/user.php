<?php
class User extends Db
{
    public function checkLogin($username, $password)
    {
        $sql = self::$connection->prepare("SELECT * FROM user WHERE `username`=? AND `password`=?");
        $password = md5($password);
        $sql->bind_param("ss", $username, $password);
        $sql->execute();
        $items = $sql->get_result()->num_rows;
        if ($items == 1) {
            return true;
        } else {
            return false;
        }
    }
    public function addregister($username, $password)
    {
        $sql = self::$connection->prepare("
    INSERT INTO `user`(`username`,`password`) 
    VALUES (?,?)");
        var_dump("INSERT INTO `user`(`username`,`password`) 
    VALUES ($username,$password)");
        $passwordd = md5($password);
        $sql->bind_param("ss", $username, $passwordd);
        return $sql->execute();
    }
    public function getUserByRole($role_id)
    {
        $sql = self::$connection->prepare("SELECT role_id FROM user WHERE role_id = ?");
        $sql->bind_param("i", $role_id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getUsername($role_id)
    {
        $sql = self::$connection->prepare("SELECT username FROM user WHERE role_id = ?");
        $sql->bind_param("i", $role_id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
}
