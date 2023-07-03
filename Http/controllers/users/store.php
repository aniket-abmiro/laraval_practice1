<?php

// dd("hello");
use core\Validator;
use core\Database;
use core\App;


$db = App::resolve(core\Database::class);


$errors = [];
if(! Validator::string($_POST['name'],1,100))
{
    $errors['body'] = 'A body cannot be more than 1000 words';
} 

if(!empty($errors))
{
    return view('/users/create.view.php',[
        'errors'=>$errors
    ]);
}

$db->query('INSERT INTO   users(name, age) VALUES ( :name, :age)',['name'=>$_POST['name'],'age'=>$_POST['age']]);

header('location: /users');
die();
