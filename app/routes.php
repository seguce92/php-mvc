<?php
/**
 * Created by S€GU©€.
 * Date: 11-04-16
 * Time: 09:55 PM
 */
/* Routes dir add friends routes and closure event generate
*/
use App\View\View;

$routes->add('/', function(){
    return View::make('users.index');
});

$routes->add('/ser', 'UserController::index');

$routes->add('/create', 'UserController::create');

$routes->add('/products', function(){
    return View::make('products.index');
});

$routes->add('/users', function(){
    return View::make('users.index');
});

$routes->add('/users/create', function(){
    return View::make('users.create');
});

$routes->add('/users/store', function(){
    return View::make('users.store');
});