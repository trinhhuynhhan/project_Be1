<?php
class Product extends Db
{
    public function getAllProducts()
    {
        $sql = self::$connection->prepare("SELECT * FROM products, manufactures, protypes 
        WHERE products.manu_id = manufactures.manu_id
        AND products.type_id = protypes.type_id
        ORDER BY id DESC");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function get10NewsProducts()
    {
        $sql = self::$connection->prepare("SELECT * FROM products,protypes 
        WHERE products.type_id = protypes.type_id
        ORDER BY `id` DESC LIMIT 0,10");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }


    //////////////////////////***TOP SELLING PRODUCTS***//////////////////////////
    public function get5TopSellingProducts()
    {
        $sql = self::$connection->prepare("SELECT * FROM products,protypes 
        WHERE products.type_id = protypes.type_id
        ORDER BY `id` DESC LIMIT 0,5");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getTopSellingProducts1()
    {
        $sql = self::$connection->prepare("SELECT * FROM products,protypes 
        WHERE products.type_id = protypes.type_id
        ORDER BY `id` DESC LIMIT 0,3");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getTopSellingProducts2()
    {
        $sql = self::$connection->prepare("SELECT * FROM products,protypes 
        WHERE products.type_id = protypes.type_id
        ORDER BY `id` ASC LIMIT 0,3");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    /////////////////////////////////////////////////////////////////////////////

    public function getProductById($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE id = ?");
        $sql->bind_param("i", $id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getProductByType($type_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE type_id = ?");
        $sql->bind_param("i", $type_id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function search($keyword)
    {
        $sql = self::$connection->prepare("SELECT * FROM products, protypes 
        WHERE products.type_id = protypes.type_id
        AND `description` LIKE ?");
        $keyword = "%$keyword%";
        $sql->bind_param("s", $keyword);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }

    //******************************* CRUD *******************************//
    public function addProduct($name, $manu_id, $type_id, $price, $image, $description, $feature)
    {
        $sql = self::$connection->prepare("INSERT INTO `products`(`name`, `manu_id`, `type_id`, `price`, `image`, `description`, `feature`) 
        VALUES (?,?,?,?,?,?,?)");
        $sql->bind_param("siiissi", $name, $manu_id, $type_id, $price, $image, $description, $feature);
        return $sql->execute(); //return an array
    }
    //Xoa
    public function delProduct($id)
    {
        $sql = self::$connection->prepare("DELETE FROM `products` WHERE `id`=?");
        $sql->bind_param("i", $id);
        return $sql->execute();
    }
    //Sua
    public function updateProduct($name, $manu_id, $type_id, $price, $image, $description, $feature, $id)
    {
        if ($image != "") {
            $sql = self::$connection->prepare("UPDATE `products` 
            SET `name`=?,`manu_id`=?,`type_id`=?, `price`=?, `image`=? ,`description`=?, `feature`=? WHERE `id`=?");
            $sql->bind_param("siiissii", $name, $manu_id, $type_id, $price, $image, $description, $feature, $id);
        } else {
            $sql = self::$connection->prepare("UPDATE `products` 
            SET `name`=?,`manu_id`=?,`type_id`=?, `price`=?, `description`=?, `feature`=? WHERE `id`=?");
            $sql->bind_param("siiisii", $name, $manu_id, $type_id, $price, $description, $feature, $id);
        }
        return $sql->execute(); //return an array
    }
    // public function updateProduct($name, $manu_id, $type_id, $price, $image, $description, $feature, $id)
    // {
    //     $sql = self::$connection->prepare("UPDATE `products` 
    //     SET `name`=?, `manu_id`=?, `type_id`=?, `price`=?, `image`=?, `description`=?, 
    //     `feature`=? WHERE `id`=?");
    //     $sql->bind_param("siiissii", $name, $manu_id, $type_id, $price, $image, $description, $feature, $id);
    //     return $sql->execute(); //return an array
    // }
}
