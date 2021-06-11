<?php

namespace App\Models;

use PDO;

/**
 * Example user model
 *
 * PHP version 7.0
 */
class User extends \Core\Model
{

    /**
     * Get all the users as an associative array
     *
     * @return array
     */
    public static function test($username,$password)
    {
        $db = static::getDB();
        $stmt = $db->query('SELECT * FROM user WHERE username = "'.$username.'" and password= "'.$password.'"');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
