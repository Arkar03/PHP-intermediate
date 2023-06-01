<?php

$ary = ["1" => "One", "2" => "Two", "3" => "Three"];
$num = 20;

array_walk($ary, function ($value, $key) use (&$num){
    ++$num;
    echo "Key is $key and Value is $value. Current Value is $num <hr>";
});
