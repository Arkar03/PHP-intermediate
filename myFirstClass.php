<?php 

class myFirstClass {
    private $name = 'Rkar';
    public $age = 12;

    public function myMethod($default = 10)
    {
        echo $this->name;
        echo $this->age;
    }
}

