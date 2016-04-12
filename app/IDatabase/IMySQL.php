<?php
/**
 * Created by S€GU©€.
 * Date: 11-04-16
 * Time: 08:59 PM
 */
namespace App\IDatabase;

interface IMySQL
{
    public static function connect();

    public static function query($sql);

    public static function close();
}