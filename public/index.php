<?php
/**
 * Created by S€GU©€.
 * Date: 11-04-16
 * Time: 08:48 PM
 */
require '../vendor/autoload.php';
use App\Http\Controllers;
use App\View\View as view;
use App\Http\Routing\Routes;

$routes = new Routes($_SERVER['REQUEST_URI']);

include '../app/routes.php';

$routes->run();