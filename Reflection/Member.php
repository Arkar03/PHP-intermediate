<?php 

namespace Reflection;

class Member {
    private $isAuth = false;
    private $detailInfo = [
        "name" => "Arkar",
        "age" => 20,
        "school" => "Dagon"
    ];
    public function detailInfo()
    {
        return $this->detailInfo;
    }
    public function setAuth($bol)
    {
        $this->isAuth = $bol;
    }
    public function getAuth()
    {
        return $this->isAuth;
    }
}