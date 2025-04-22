<?php

use src\Polygon;
use src\polygons\Rectangle;
use src\polygons\Square;

require __DIR__ . '/vendor/autoload.php';


$polygon = new Polygon();
$polygon->setShape(new Rectangle());
$polygon->getShape()->setHeight(5);
$polygon->getShape()->setWidth(10);

echo '<pre>';
print_r($polygon);
echo '</pre>';

echo '<h3>Área do retângulo: ' . $polygon->getArea() . '</h3>';


$polygon = new Polygon();
$polygon->setShape(new Square());
$polygon->getShape()->setHeight(5);

echo '<pre>';
print_r($polygon);
echo '</pre>';

echo '<h3>Área do quadrado: ' . $polygon->getArea() . '</h3>';
