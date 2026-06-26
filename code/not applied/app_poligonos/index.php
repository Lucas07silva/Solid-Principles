<?php

require_once __DIR__ . '/vendor/autoload.php';

use src\Retangulo;
use src\Quadrado;

// Retângulo
$retangulo = new Retangulo();

$retangulo->setAltura(5);
$retangulo->setLargura(10);

echo '<h3>Área do Retângulo</h3>';
echo $retangulo->getArea();

// Quadrado
$quadrado = new Quadrado();

$quadrado->setAltura(5);

echo '<h3>Área do Quadrado</h3>';
echo $quadrado->getArea();

// Teste de substituição
$retangulo = new Quadrado();

$retangulo->setAltura(5);
$retangulo->setLargura(10);

echo '<h3>Área do Retângulo baseado em Quadrado</h3>';
echo $retangulo->getArea();