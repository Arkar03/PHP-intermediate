<?php 

class getSetMethod {
     private $name = 'Rkar';
     private $age = 20;
     
     public function getData()
     {
        return $this->name . $this ->age;
     }
     public function setData($name)
     {
        $this->name = $name;
     }
     
}


$obj = new getSetMethod();
$obj ->setData('Arkar');
echo $obj->getData();