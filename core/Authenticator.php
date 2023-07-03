<?php

namespace core;
use core\App;
use core\Database;

class Authenticator
{
    public function attempt($email,$password)
    {
        $db = App::resolve(Database::class);
        $user = $db->query('select * from users where email = :email',[
            'email' => $email,
        ])->find();

        if($user)
        {
            if(password_verify($password,'$2y$10$qnY7ngbvzC/iOdFGX1b7e.MVXiE.UmAerVQUgn9aHn0LH6hN7aJna'))
            {
                // dd("hello");
                $this->login(['email'=>$email]);
                return true;
            }
        }
        return false;
    }

    public function login($user)
    {
        $_SESSION['user'] = [
            'email'=>$user['email']
        ];
    }

    public function logout()
    {
        $_SESSION = [];
        session_destroy();
    }
}

