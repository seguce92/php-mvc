<?php
/**
 * Created by S€GU©€.
 * Date: 12-04-16
 * Time: 08:33 AM
 */

namespace App\View;

/**
 * Class View
 * @package App\View
 */
class View
{
    /**
     * @param $view
     * @param null $parameters
     */
    public static function make($view, $parameters=null)
    {
        $view = str_replace('.', '/', $view);
        ob_start();
        include '../resources/' . $view . '.view.php';
        die(ob_get_clean());
    }
}