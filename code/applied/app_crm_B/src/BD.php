<?php

namespace src;

class BD
{
    protected $conexao;

    public function conectar()
    {
        // Simulação de conexão
        $this->conexao = 'Conectado';
    }
}