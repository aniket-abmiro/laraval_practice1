<?php

use core\App;
use core\Container;
use core\Database;



$container = new Container();
// dd("hello");

$container->bind('core\Database',function()
{
    return new Database();
});

App::setContainer($container);



// $db = $container->resolve('core\Database');
// $container->resolve('ygfug');

// dd($db);