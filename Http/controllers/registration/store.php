<?php

use core\Validator;
use core\App;
use core\Database;
use core\Authenticator;

$email = $_POST['email'];
$password = $_POST['password'];
//validate the foem input
$errors = [];

if(!Validator::email($email))
{
    $errors ['email'] = 'pls enter valid email address';
}

if(! Validator::string($password, 7 , 255))
{
    $errors['password'] = 'pls enter valid password';
}

if(!empty($errors))
{
    return view('registration/create.view.php',[
        'errors'=>$errors
    ]);
}

$db = App::resolve(Database::class);

$user = $db->query('select * from users where email = :email',[
    'email' => $email,
])->find();

if($user)
{
    //email alreday exists
    //redirect to the login page
    header('location: /login');
    exit();
}
else{
    //
    $db->query('insert into users(email,password) values(:email, :password)',[
        'email'=>$email,
        'password'=>password_hash($password,PASSWORD_DEFAULT)
    ]);
    // marked new user logged in
    (new Authenticator())->login(['email'=>$email]);
    header('location: /users');
    die();
}