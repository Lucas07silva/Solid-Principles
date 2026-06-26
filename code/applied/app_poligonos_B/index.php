<?php

require_once __DIR__ . '/vendor/autoload.php';

use src\Poligono;
use src\Poligonos\Retangulo;
use src\Poligonos\Quadrado;

$poligono = new Poligono();

$retangulo = new Retangulo();
$retangulo->setAltura(5);
$retangulo->setLargura(10);

$poligono->setForma($retangulo);

echo '<h3>Área do Retângulo</h3>';
echo $poligono->getArea();

echo '<hr>';

$poligono = new Poligono();

$quadrado = new Quadrado();
$quadrado->setLargura(5);

$poligono->setForma($quadrado);

echo '<h3>Área do Quadrado</h3>';
echo $poligono->getArea();