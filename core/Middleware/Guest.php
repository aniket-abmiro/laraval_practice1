<?php
namespace core\Middleware;

class Guest{
    public function handle()
    {
        if(isset($_SESSION['user']))
        {
            header('location: /users');
            exit();
        }
    }
}