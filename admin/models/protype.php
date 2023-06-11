<?php
class Protype extends Db{
    public function getAllProtypes()
    {
        $sql = self::$connection->prepare("SELECT * FROM protypes");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function addProtype($name)
    {
        $sql = self::$connection->prepare("INSERT INTO `protypes`(`type_name`)
        VALUES (?)");
        $sql->bind_param("s",$name);
        return $sql->execute(); //return an array
    }
    public function getProtypeById($type_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM `protypes` WHERE `type_id`=?");
        $sql->bind_param("i", $type_id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }

    public function delProtype($type_id)
    {
        $sql = self::$connection->prepare("DELETE FROM `protypes` WHERE `type_id`=?");
        $sql->bind_param("i", $type_id);
        return $sql->execute(); //return an array
    }
    public function updateProtype($type_name,$type_id)
    {
        $sql = self::$connection->prepare("UPDATE `protypes` SET `type_name`=? WHERE `type_id`=?");
        $sql->bind_param("si", $type_name,$type_id);
        return $sql->execute(); //return an array
    }
}