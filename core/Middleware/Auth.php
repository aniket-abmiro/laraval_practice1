<?php
namespace core\Middleware;

class Auth{
    public function handle()
    {
        if(!isset($_SESSION['user']))
        {
            header('location: /register');
            exit();
        }
    }
}