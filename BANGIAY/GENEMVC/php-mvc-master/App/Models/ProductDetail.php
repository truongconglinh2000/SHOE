<?php

namespace App\Models;

use PDO;

/**
 * Example user model
 *
 * PHP version 7.0
 */
class ProductDetail extends \Core\Model
{

    /**
     * Get all the users as an associative array
     *
     * @return array
     */
    public static function getAll()
    {
        $db = static::getDB();
        $stmt = $db->query('SELECT id_pro,id_prode,image from product_detail');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function getID($id)
    {
        $db = static::getDB();
        $stmt = $db->query('SELECT * from product_detail WHERE id_prode='.$id);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function get($idSP)
    {
        $db = static::getDB();
        $stmt = $db->query('SELECT * from product_detail, product WHERE product.id_pro = product_detail.id_pro and product_detail.id_prode='.$idSP);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
