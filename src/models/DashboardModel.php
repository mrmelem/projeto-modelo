<?php


namespace models;

class DashboardModel extends Model
{


    static function setProduct($data)
    {
        $sql = \MySql::conectar()->prepare('INSERT INTO `tb_products` VALUES (null,?,?,?,?,?,?,?,?)');
        $sql->execute(array(
            $data['title'],
            $data['slug'],
            $data['category'],
            $data['price'],
            $data['description'],
            $data['size'],
            $data['quantity'],
        ));
    }

    static function getProducts()
    {
    }

    static function getProductById()
    {
    }
}
