<?php

namespace src;

use src\Arquivo;

class Leitor
{
    private string $diretorio;
    private string $arquivo;

    public function getDiretorio(): string
    {
        return $this->diretorio;
    }

    public function setDiretorio(string $diretorio): void
    {
        $this->diretorio = $diretorio;
    }

    public function getArquivo(): string
    {
        return $this->arquivo;
    }

    public function setArquivo(string $arquivo): void
    {
        $this->arquivo = $arquivo;
    }

    public function lerArquivo(): array
{
    $caminho = $this->getDiretorio() . '/' . $this->getArquivo();

    $extensao = explode('.', $this->getArquivo());

    $classe = ucfirst($extensao[1]);

    $classe = 'src\\Extrator\\' . $classe;

    return call_user_func(
        [
            new $classe(),
            'lerArquivo'
        ],
        $caminho
    );
}
}