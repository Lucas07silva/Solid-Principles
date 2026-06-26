<?php

require_once __DIR__ . '/vendor/autoload.php';

use src\Leitor;

$leitorTxt = new Leitor();

$leitorTxt->setDiretorio(__DIR__ . '/arquivos');
$leitorTxt->setArquivo('dados.txt');

$arrayTxt = $leitorTxt->lerArquivo();

$leitorCsv = new Leitor();

$leitorCsv->setDiretorio(__DIR__ . '/arquivos');
$leitorCsv->setArquivo('dados.csv');

$arrayCsv = $leitorCsv->lerArquivo();

echo '<pre>';

print_r(
    array_merge(
        $arrayTxt,
        $arrayCsv
    )
);

echo '</pre>';