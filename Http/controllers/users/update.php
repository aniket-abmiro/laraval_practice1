<?php


// $db = new Database();
// require base_path('bootstrap.php');
use core\Database;
use core\App;
use core\Validator;

$db = App::resolve(core\Database::class);

// dd($db);
//authorisaton 
authorize(true);


//Validate the Input
$errors = [];
if(! Validator::string($_POST['name'],1,100))
{
    $errors['body'] = 'A body cannot be more than 1000 words';
} 

if(!empty($errors))
{
    return view('/users/edit.view.php',[
        'errors'=>$errors
    ]);
}


//redirect to the next page

$db->query('update users set name =:name, age=:age where id=:id',['id'=>$_POST['id'],'name'=>$_POST['name'],'age'=>$_POST['age']]);
header('location: /users');
exit();
 