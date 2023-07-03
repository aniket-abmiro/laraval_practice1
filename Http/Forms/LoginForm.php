<?php

namespace Http\Forms;
use core\Validator;
use core\ValidationException;

class LoginForm
{
    protected $errors = [];
    public $attributes;
    public function __construct($attributes)
    {
        $this->attributes = $attributes;
        if(!Validator::email($attributes['email']))
        {
            $this->errors ['email'] = 'pls enter valid email address';
        }

        if(! Validator::string($attributes['password'], 7 , 255))
        {
            $this->errors['password'] = 'pls enter valid password';
        }
    
    }
    public static function validate($attributes)
    {
        $instance = new static($attributes);
        return $instance->failed() ? $instance->throw(): $instance;
    }
    public function throw()
    {
        ValidationException::throw($this->errors(),$this->attributes);
    }

    public function failed()
    {
        return count($this->errors);
    }

    public function errors()
    {
        return $this->errors;
    }

    public function error($field ,$message)
    {
        $this->errors[$field] = $message;
        return $this;
    }

}