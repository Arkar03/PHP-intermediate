<?php

namespace app;

use gen\shape;

// require_once "../vendor/autoload.php";


class square implements shape
{
    private $width;
    private $height;

    public function __construct(float $width, float $height)
    {

        $this->width = $width;
        $this->height = $height;
    }
    public function getArea()
    {
        return $this->width  * $this->height;
    }
}
