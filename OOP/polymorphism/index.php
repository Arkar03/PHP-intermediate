<?php

namespace polymorphism;

use app\circle;
use app\square;
use gen\shape;

require_once "./vendor/autoload.php";

class index
{
    public function __construct()
    {
        $circle = new circle(30);
        $circle->getArea();
        echo "<hr>";
        $square = new square(23, 44);
        $square->getArea();

        $this->getAmount($circle);
        $this->getAmount($square);
    }

    public function getAmount(shape $shape)
    {
        $totalArea = $shape->getArea();
        echo "Your total amount is " . $totalArea * 17 . "$<hr>";
    }
}


new index();
