<?php

class index
{
    public function __get($var)
    {
        echo "You're trying to get none exist property {$var} <hr>";
    }

    public function __set($var, $value)
    {
        echo "You're trying to set none exit property {$var} with value {$value}";
    }
    public function __call($method, $args)
    {
        echo "You're calling none exit method {$method} with arg {$args}";
    }
    // public function __callStatic($method, $args)
    // {
    //     echo "You're calling none exit static method {$method} with arg {$args}";
    // }
}   
