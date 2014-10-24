<?php
interface Figure
{
    public function getAreaTriangle();
    public function getPerimeterTriangle();
}

abstract class AbstractTriangle implements Figure
{
    public $lengthA;

    public $lengthB;

    public $lengthC;


}
?>