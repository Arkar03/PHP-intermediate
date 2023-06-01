<?php 

interface sheInter {
    public function setWeapon($weapon);
}

class index implements sheInter{
    private $weapon;
    public function setWeapon($weapon)
    {
        $this->weapon = $weapon;
    }

    public function killNow()
    {
        echo "Killing Enemy with " . $this->weapon;
    }
}

$obj = new index();