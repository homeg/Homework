<?php
namespace Core;

class Rectangle extends Figure
{
    private $length;
    private $width;

    public function __construct($length, $width)
    {
        $this->length = $length;
        $this->width = $width;
    }

    public function getArea()
    {
        return $this->length * $this->width;
    }

    public function draw()
    {
        echo "Draw Rectangle";
    }

    public function rotate()
    {
        echo "Rotate Rectangle";
    }
}
