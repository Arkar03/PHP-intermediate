<?php
require_once('Member.php');

$member = new Member();
$rc = new ReflectionClass('Member');
showData(get_class_methods($rc));

function showData($ary)
{
    echo "<pre>" . print_r($ary, true) . "</pre>";
}
