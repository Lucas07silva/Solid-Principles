<?php

namespace src;

use src\Item;

class CarrinhoCompra
{
    private array $itens;

    public function __construct()
    {
        $this->itens = [];
    }

    public function getItens(): array
    {
        return $this->itens;
    }

    public function adicionarItem(Item $item): bool
    {
        $this->itens[] = $item;
        return true;
    }

    public function validarCarrinho(): bool
    {
        return count($this->itens) > 0;
    }
}