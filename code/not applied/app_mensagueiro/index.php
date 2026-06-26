<?php

require_once __DIR__ . '/vendor/autoload.php';

use src\Mensageiro;

$msg = new Mensageiro();

$msg->setCanal('Email');
$msg->enviarToken();

echo '<hr>';

$msg2 = new Mensageiro();

$msg2->setCanal('SMS');
$msg2->enviarToken();