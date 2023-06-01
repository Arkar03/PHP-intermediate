<?php

class Member
{
    public $name = "Mg Mg";
    public $age = 20;
    public $subject = "HTML";

    public function friendCount()
    {
        echo "I am friend count method!";
    }
}

class GoldMember extends Member
{

}


$obj = new GoldMember();
echo $obj->name;
echo $obj->friendCount();