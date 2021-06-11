<?php

namespace App\Models;

use PDO;

/**
 * Example user model
 *
 * PHP version 7.0
 */
class Order extends \Core\Model
{

    /**
     * Get all the users as an associative array
     *
     * @return array
     */
    public static function Insert($idUser,$idPro,$name,$fullname,$email,$phone,$address,$total){
        $db = static::getDB();
        //$stmt = $db->query('INSERT INTO order(id_user,id_prode,name,fullname,email,phone,address,total) values ('.$idUser.','.$idPro.',"'.$name.'","'.$fullname.'","'.$email.'","'.$phone.'","'.$address.'",'.$total.')');
       $stmt = $db ->query("INSERT INTO `order` (`id_user`, `id_prode`, `name`, `fullname`, `email`, `phone`, `address`, `total`) VALUES($idUser, $idPro, '$name', '$fullname,', '$email,', '$phone,', '$address,', $total)");
    
    }
    public static function Select($idUser){
        $db = static::getDB();
        $stmt = $db->query('SELECT * FROM order WHERE id_user='.$idUser);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
}
