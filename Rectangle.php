<?php

include("AbstractTriangle.php");

class Rectangle extends AbstractTriangle
{

    public function getAreaTriangle()
    {

        echo "area = 160 ";
    }

    public function getPerimeterTriangle()
    {
        echo "perimeter = 50 ";
    }
}
$triangle = new Rectangle();
$triangle->getAreaTriangle();
$triangle->getPerimeterTriangle();