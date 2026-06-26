<?php

require __DIR__ . "/vendor/autoload.php";

use src\CarrinhoCompra;
use src\Item;
use src\Pedido;
use src\EmailService;

// ======================================
// Pedido
// ======================================

$pedido = new Pedido();


// ======================================
// Itens
// ======================================

$item = new Item();
$item->setDescricao('Porta Copos');
$item->setValor(4.55);

$item2 = new Item();
$item2->setDescricao('Lâmpada');
$item2->setValor(8.32);


// ======================================
// Estado inicial do pedido
// ======================================

echo '<h3>Estado inicial do pedido</h3>';
echo '<pre>';
print_r($pedido);
echo '</pre>';


// ======================================
// Adicionando itens ao carrinho
// ======================================

$pedido->getCarrinhoCompra()->adicionarItem($item);
$pedido->getCarrinhoCompra()->adicionarItem($item2);


// ======================================
// Pedido com itens
// ======================================

echo '<h3>Pedido com itens</h3>';
echo '<pre>';
print_r($pedido);
echo '</pre>';


// ======================================
// Exibindo itens do carrinho
// ======================================

echo '<h3>Itens do carrinho</h3>';
echo '<pre>';
print_r(
    $pedido->getCarrinhoCompra()->getItens()
);
echo '</pre>';


// ======================================
// Valor total do pedido
// ======================================

$total = 0;

foreach (
    $pedido->getCarrinhoCompra()->getItens()
    as $itemCarrinho
) {
    $total += $itemCarrinho->getValor();
}

echo '<h3>Valor do pedido</h3>';
echo $total;


// ======================================
// Validar carrinho
// ======================================

echo '<h3>Validação do carrinho</h3>';

var_dump(
    $pedido->getCarrinhoCompra()->validarCarrinho()
);


// ======================================
// Status do pedido
// ======================================

echo '<h3>Status do pedido</h3>';
echo $pedido->getStatus();


// ======================================
// Confirmar pedido
// ======================================

echo '<h3>Confirmação do pedido</h3>';

var_dump(
    $pedido->confirmar()
);


// ======================================
// Novo status
// ======================================

echo '<h3>Status após confirmação</h3>';
echo $pedido->getStatus();


// ======================================
// Envio de e-mail
// ======================================

echo '<h3>E-mail</h3>';

if ($pedido->getStatus() === 'confirmado') {
    echo EmailService::dispararEmail();
}




/*
print_r($carrinho1->exibirItens());
echo 'Valor total: '.$carrinho1->exibirValorTotal();


$carrinho1->adicionarItem('Bicicleta', 750.10);
$carrinho1->adicionarItem('Galadeira', 1950.15);
$carrinho1->adicionarItem('Tapete', 350.20);


echo "<br />";
print_r($carrinho1->exibirItens());
echo 'Valor total recalculado: '.$carrinho1->exibirValorTotal();

echo "<br />";
echo 'status: '.$carrinho1->exibirStatus();


$carrinho1->adicionarItem('Televisão 65"', 3570.25);

echo "<br />";
if($carrinho1->confirmarPedido()) {
    echo 'Pedido realizado com sucesso!';
} else {
    echo 'Erro na confirmação do pedido. Carrinho não possui itens';
}
echo "<br />";
echo 'status: '.$carrinho1->exibirStatus();

*/