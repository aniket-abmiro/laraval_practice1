
<?php
// return [
//     '/'=>'controllers/index.php',
//     '/about'=>'controllers/about.php',
//     '/contact'=>'controllers/contact.php',
//     '/users'=>'controllers/users/users.php',
//     '/user/create' => 'controllers/users/create.php',
// ];

$router->get('/','index.php');
$router->get('/about','about.php');
$router->get('/contact','contact.php');


$router->get('/users','users/users.php')->only('auth');
$router->get('/user/create','users/create.php');
$router->delete('/users','users/destroy.php');

$router->get('/user/edit','users/edit.php');
$router->patch('/users','users/update.php');
$router->post('/user/create','users/store.php');


$router->get('/register','registration/create.php')->only('guest');
$router->post('/register','registration/store.php');

$router->get('/login','sessions/create.php')->only('guest');
$router->post('/login','sessions/store.php')->only('guest');
$router->delete('/sessions','sessions/destroy.php')->only('auth');

