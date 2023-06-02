<?php

require_once "./vendor/autoload.php";

use app\database\DBGen;

class index {
    private $db;

    public function __construct()
    {   
        $shops = [
            ['Apple','192.168.100.6','apple','123',1],
            ['Microsoft','192.168.100.7','MS','123',1],
            ['One Plus','192.168.100.8','1+','123',1],
            ['Huawei','192.168.100.9','huawei','123',1],
        ];
        $this->db = new DBGen();
        // $this->db->getMultipleShop(1);
        // $this->db->insertSingleShop('Apple','192.169.1.104','apple','123',1);
        // $this->db->insertMultipleShop($shops);
        // $this->db->updateShop(4, 'Steve Job');
        // $this->db->deleteShop(5);
        // $this->db->getJoinData(1);
        $this->db->fetchAllShop(1);
    }
}

new index();