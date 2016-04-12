<?php
/**
 * Created by S€GU©€.
 * Date: 12-04-16
 * Time: 08:43 AM
 */

namespace App\Http\Controllers;
use App\View\View;

/**
 * Class UserController
 * @package App\Http\Controllers
 */
class UserController extends BaseController
{
    /**
     * @return string
     */
    public static function index()
    {
        return 'hello world';
    }

    /**
     *
     */
    public static function create()
    {
        return View::make('users.create');
    }
}