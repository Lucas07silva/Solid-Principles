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

    $arquivo = new Arquivo();

    $extensao = explode('.', $this->getArquivo());

    if ($extensao[1] == 'csv') {

        $arquivo->arquivoCsv($caminho);

    } elseif ($extensao[1] == 'txt') {

        $arquivo->arquivoTxt($caminho);
    }

    return $arquivo->getDados();
}
}