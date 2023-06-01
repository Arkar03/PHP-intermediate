<?php 

  class destructor {

    public $t = 0;
    public function __construct()
    {
        echo "I am Constructor and Start Working";
    }

    public function loopIt()
    {
        for ($i=0; $i < 1000; $i++) { 
             $this->t += $i;
        }
        echo "value of t $this->t";
    }

    public function __destruct()
    {
        echo "I am Destructor and I'm done";
    }
  }


  $obj = new destructor();
  $obj->loopIt();
  $obj->loopIt();