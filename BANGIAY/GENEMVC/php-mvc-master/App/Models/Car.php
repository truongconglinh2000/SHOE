<?php

namespace App\Models;

use PDO;

/**
 * Example user model
 *
 * PHP version 7.0
 */
class Car extends \Core\Model
{

    /**
     * Get all the users as an associative array
     *
     * @return array
     */
    public static function Insert($idUser,$idPro,$name,$image,$size,$soluong,$price,$total)
    {
        $db = static::getDB();
        $stmt = $db->query('INSERT INTO cart(id_user,id_prode,name,image,size,soluong,price,total) values ('.$idUser.','.$idPro.',"'.$name.'","'.$image.'",'.$size.','.$soluong.','.$price.','.$total.')');
       
    }
    public static function Select($idUser){
        $db = static::getDB();
        $stmt = $db->query('SELECT * FROM cart WHERE id_user ='.$idUser);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function SelectID($idPro,$idUser){
        $db = static::getDB();
        $stmt = $db->query('SELECT * FROM cart WHERE id_user ='.$idUser.' and id_prode ='.$idPro);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function Delete($idPro){
        $db = static::getDB();
        $stmt = $db->query('DELETE FROM cart WHERE id_prode ='.$idPro);
      
    }
    
}
