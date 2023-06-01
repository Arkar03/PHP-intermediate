<?php

namespace app;

use gen\shape;

class circle implements shape
{   
    private $radius;
    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    public function getArea()   
    {
        return $this->radius * $this->radius * pi();
    }
}
