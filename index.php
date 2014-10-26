<?php
require __DIR__.'/Autoloader.php';

use Core\Rectangle;
use Core\Circle;

$rectangle = new Rectangle(12, 6);
$rectangle->getArea();
$rectangle->draw();
$rectangle->rotate();

$circle = new Circle(14);
echo $circle->getArea();
$circle->draw();
$circle->rotate();
