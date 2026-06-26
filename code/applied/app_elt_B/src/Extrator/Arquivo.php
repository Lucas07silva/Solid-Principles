<?php

namespace src\Extrator;

class Arquivo
{
    protected array $dados = [];

    public function getDados(): array
    {
        return $this->dados;
    }

    protected function setDados(
        string $nome,
        string $cpf,
        string $email
    ): void {
        $this->dados[] = [
            'nome' => $nome,
            'cpf' => $cpf,
            'email' => $email
        ];
    }
}