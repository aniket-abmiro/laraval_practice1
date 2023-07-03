<?php

use core\Database;
use core\App;

$db = App::resolve(core\Database::class);

// $db = $container->resolve('core\Database');

$id = 1;
//$users = $db->query('select * from users where id = :id', ['id' => $id])->findOrFail();
//select* from users where id = :id',['id' => $_GET['id']]);
// where id= :id', ['id'=>$id]
$users = $db->query('select * from users')->findOrFail();

//dd($users);
authorize($id == 1);


view('/users/users.view.php',[
    'users'=>$users
]);
