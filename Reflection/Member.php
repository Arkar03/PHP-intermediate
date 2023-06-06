<?php

namespace App;

class Member
{
    private $isAuth = false;
    private $detailInfo = [
        "name" => "Arkar",
        "age" => 20,
        "school" => "Dagon"
    ];
    public function getDetailInfo($data, $info)
    {
        // return $this->detailInfo;
        echo "I am being invoiked $data";
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
