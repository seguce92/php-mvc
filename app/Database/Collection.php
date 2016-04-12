<?php
/**
 * Created by S€GU©€.
 * Date: 12-04-16
 * Time: 12:06 AM
 */

namespace App\Database;


class Collection
{
    public function all($table)
    {
        return "SELECT * FROM" . $table;
    }

    public function where($item, $condition = null, $value = null)
    {
        if($item != null && $condition != null && $value != null)
            return "WHERE " . $item . " " . $condition . " " .$value;
        elseif ($item != null && $condition != null)
            return "WHERE " . $item . " = " .$value;
        else
            throw error_reporting(1);
    }

    public function select($table, $array = [])
    {

    }
}