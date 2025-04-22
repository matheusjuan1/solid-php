<?php

use src\Rectangle;
use src\Square;

require __DIR__ . '/vendor/autoload.php';

$rectangle = new Rectangle();
$rectangle->setHeight(5);
$rectangle->setWidth(10);

echo '<h3>Área do retângulo: ' . $rectangle->getArea() . '</h3>';


$square = new Square();
$square->setHeight(5);

echo '<h3>Área do quadrado: ' . $square->getArea() . '</h3>';

$rectangle = new Square();
$rectangle->setHeight(5);
$rectangle->setWidth(10);

echo '<h3>LSP - Área do retângulo: ' . $rectangle->getArea() . '</h3>';
