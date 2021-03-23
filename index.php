<?php
require_once 'core/init.php';

// $user = DB::getInstance()->query("SELECT username FROM users WHERE username = ?", array('Alex'));
// $user = DB::getInstance()->get('users', array('username', '=', 'alex'));
// $user = DB::getInstance()->query("SELECT * FROM users");

// if(!$user->count()) {
//         echo 'No user';
//     } else {
//          echo $user->first()->username;
// }

// $user = DB::getInstance()->insert('users', array(
//     'username' => 'Dale',
//     'password' => 'password',
//     'salt' => 'salt'
// )
// );

$user = DB::getInstance()->update('users', 3, array(
    'password' => 'newpassword',
    'name' => 'Ovidiu Morosan'
    
));