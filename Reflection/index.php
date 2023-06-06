<?php
require_once "Member.php";
function showData($ary)
{
    echo "<pre>" . print_r($ary, true) . "<pre>";
}

$mem = new App\Member;
// $member = new App\Member();

// $rc = new ReflectionClass('App\Member');

// echo $rc->isInterface();
// // echo $rc->hasMethod('getDetailInfo');
// echo "<hr>";

// showData(get_class_methods($rc));

$rm = new ReflectionMethod('App\Member', 'getDetailInfo');
showData(get_class_methods($rm));

$rm->invoke($mem);

$rp = new ReflectionProperty('App\Member','detailInfo');

showData(get_class_methods($rp));
print_r( $rp->getValue($mem));

