<?php
/**
 * Created by S€GU©€.
 * Date: 11-04-16
 * Time: 08:48 PM
 */

namespace App\Database;


use App\IDatabase\IMySQL;

class MySQL extends Collection implements IMySQL
{
    protected static $connection;
    protected static $host = 'localhost';
    protected static $user = 'seguce';
    protected static $password = 'secret';
    protected static $db = 'seminario_aux';

    public static function connect()
    {
        static::$connection = mysqli_connect(static::$host, static::$user, static::$password)or die('Error in the connection host database.');
        mysqli_select_db(static::$connection, static::$db)or die('Error in the select database.');
    }

    public static function query($sql)
    {
        return mysqli_query(static::$connection, $sql);
    }

    public static function close()
    {
        mysqli_close(static::$connection);
    }

    public static function insert($table, $array)
    {
        $sql = "INSERT INTO " . $table . " VALUES(default";
        foreach ($array as $item) {
            if(is_numeric($item) || is_float($item))
                $sql .= ", " . $item;
            else
                $sql .= ", '" . $item . "'";
        }
        $sql .= ")";
        //return $sql;
        mysqli_query(static::$connection, $sql)or die('Error al insertar información');
    }
}