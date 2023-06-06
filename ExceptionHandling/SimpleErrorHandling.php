<?php 
require_once "myFileReader.php";
try {
    myFileRead('hh.txt');
}catch(Exception $e) {
    echo $e->getMessage();  
    echo "<br>";
    echo $e->getCode();  
    echo "<br>";
    echo $e->getTraceAsString();  
    echo "<br>";
    echo $e->getLine();  
    echo "<br>";

}