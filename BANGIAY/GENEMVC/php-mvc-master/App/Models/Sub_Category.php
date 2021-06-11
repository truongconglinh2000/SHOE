<?php

namespace App\Models;

use PDO;

/**
 * Example user model
 *
 * PHP version 7.0
 */
class Sub_Category extends \Core\Model
{

    /**
     * Get all the users as an associative array
     *
     * @return array
     */
    public static function getAll($idCat)
    {
        $db = static::getDB();
        $stmt = $db->query('SELECT * from sub_category WHERE id_cat='.$idCat);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function getPro($idCat){
        $db = static::getDB();
        $stmt = $db->query('SELECT * from product WHERE id_cat='.$idCat);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    // public static function getID($idSP)
    // {
    //     $db = static::getDB();
    //     $stmt = $db->query('SELECT * from product_detail, product WHERE product.id_pro = product_detail.id_pro and product_detail.id_pro='.$idSP);
    //     return $stmt->fetchAll(PDO::FETCH_ASSOC);
    // }
    // public static function getImg($id)
    // {
    //     $db = static::getDB();
    //     $stmt = $db->query('SELECT * from product_detail WHERE id_prode='.$id);
    //     return $stmt->fetchAll(PDO::FETCH_ASSOC);
    // }
}
