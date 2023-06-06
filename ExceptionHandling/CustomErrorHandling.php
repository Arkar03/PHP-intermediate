<?php

class MyCustomException extends Exception
{
    public function __construct($message,$code)
    {
        parent::__construct($message,$code);
        $handler = fopen("log.txt",'a');
        $data = "error message => \n" . $message . "\nError Number => " . $code . "\n Error Timestamp\n". date("T-m-d H:m;s",time());
        fwrite($handler,$data);
        fclose($handler);
    }
}
function rFile($file)
{
    if (!file_exists($file)) {
        throw new MyCustomException("<div style='color:red;'>File Not Found!</div>",1001);
    }
}

try {
    rFile("hh.txt");
} catch (Exception $e) {
    echo $e->getMessage();
}
