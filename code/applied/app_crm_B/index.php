<?php

require_once __DIR__ . '/vendor/autoload.php';

use src\Dao\ContratoModel;
use src\Dao\ColetivoModel;
use src\Dao\UsuarioModel;

$contratoModel = new ContratoModel();
$coletivoModel = new ColetivoModel();
$usuarioModel = new UsuarioModel();

echo '<pre>';

print_r($contratoModel);
echo '<br>';

print_r($coletivoModel);
echo '<br>';

print_r($usuarioModel);

echo '</pre>';