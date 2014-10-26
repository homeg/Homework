<?php
namespace Core;


class Circle extends Figure
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getArea()
    {
        return (3.14 * ($this->radius * 2));
    }

    public function draw()
    {
        echo "Drow Circle";
    }

    public function rotate()
    {
        echo "Rotate Circle";
    }
}
