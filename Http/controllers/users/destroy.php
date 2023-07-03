<?php


// $db = new Database();
// require base_path('bootstrap.php');
use core\Database;
use core\App;

$db = App::resolve(core\Database::class);

// dd($db);
authorize(true);
$db->query('delete from users where id=:id',['id'=>$_POST['id']]);
header('location: /users');
exit();
 