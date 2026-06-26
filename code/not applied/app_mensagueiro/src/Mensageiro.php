<?php

namespace src;

class Mensageiro
{
    private string $canal;

    public function getCanal(): string
    {
        return $this->canal;
    }

    public function setCanal(string $canal): void
    {
        $this->canal = $canal;
    }

    public function enviarToken(): void
    {
        $classe = 'src\\' . $this->getCanal();

        echo $classe . '<br>';

        $objeto = new $classe();

        $objeto->enviar();
    }
}