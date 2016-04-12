<?php
/**
 * Created by S€GU©€.
 * Date: 11-04-16
 * Time: 11:00 PM
 */

$request = json_decode(json_encode($_REQUEST));

use App\Database\MySQL;

MySQL::connect();

MySQL::insert('users', [
    'username'  =>  $request->username,
    'password'  =>  $request->password,
    'email'     =>  $request->email,
    'status'    =>  $request->status,
    'role'      =>  $request->role
]);

/*if(!MySQL::query("INSERT INTO users VALUES(default, '".
    $request->username ."','".
    $request->password ."','".
    $request->email ."','".
    $request->status ."','".
    $request->role ."')"))
    die('error al guardar información');*/

MySQL::close();

header('Location: /users');