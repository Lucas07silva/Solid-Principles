<?php

namespace src\Poligonos;

class Quadrado
{
    private float $largura;
    private float $altura;

    public function getLargura(): float
    {
        return $this->largura;
    }

    public function setLargura(float $largura): void
    {
        $this->largura = $largura;
        $this->altura = $largura;
    }

    public function getAltura(): float
    {
        return $this->altura;
    }

    public function setAltura(float $altura): void
    {
        $this->altura = $altura;
        $this->largura = $altura;
    }
}