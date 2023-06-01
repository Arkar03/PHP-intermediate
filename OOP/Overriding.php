<?php


class Member 
{
    public $name = "Mg Mg";
    public function friendCount()
    {
        echo "I am counting your fiends";
    }
}
class Overriding extends Member
{
    public function friendCount()
    {
        echo "This is new FriendCount method.";
        
    }
}
