<?php
class Information extends Db
{
    public function getUser()
    {
        $sql = self::$connection->prepare("SELECT * FROM information");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function addInfo($name, $dob, $address, $phone, $cccd)
    {
        $sql = self::$connection->prepare("INSERT INTO `information`(`name`, `dob`, `address`, `phone`, `cccd`) 
        VALUES (?,?,?,?,?)");
        $sql->bind_param("sisii", $name, $dob, $address, $phone, $cccd);
        return $sql->execute(); //return an array
    }
}