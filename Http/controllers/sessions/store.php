<?php

use Http\Forms\LoginForm;
use core\Authenticator;
use core\Session;
use core\ValidationException;

$email = $_POST['email'];
$password = $_POST['password'];

//validate the form input

// $form = new LoginForm();
$form = LoginForm::validate([
    'email' => $_POST['email'],
    'password'=>$_POST['password']
]);



$auth = new Authenticator();
if(!$auth->attempt($email,$password))
{
    $form->error('email','No matching passsword for that email address and password')->throw();
}
redirect('/users');





// return view('sessions/create.view.php',[
//     'errors'=>$form->errors()
// ]);




