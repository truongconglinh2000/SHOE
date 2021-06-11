<?php

namespace App\Models;

use PDO;

/**
 * Example user model
 *
 * PHP version 7.0
 */
class Comment extends \Core\Model
{

    /**
     * Get all the users as an associative array
     *
     * @return array
     */
    public static function get($id)
    {
        $db = static::getDB();
        $stmt = $db->query('SELECT * FROM review,user where review.id_user= user.id_user and id_pro='.$id);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function Insert($idPro,$idUser,$name,$comment,$star){
        $db = static::getDB();
        $stmt = $db->query('INSERT INTO review VALUES(null,'.$idPro.','.$idUser.',"'.$name.'","'.$comment.'",'.$star.',DEFAULT)');
       
    }
    public static function Delete($idPro){
        $db =static::getDB();
        $stmt = $db->query('DELETE FROM review WHERE id='.$idPro);
    }
}
