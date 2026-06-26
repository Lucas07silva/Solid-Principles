<?php

namespace src;

class Arquivo
{
    private array $dados = [];

    public function arquivoCsv(string $caminho): void
    {
        $handle = fopen($caminho, 'r');

        while (($linha = fgetcsv($handle, 10000, ';', '"', '\\')) !== false) {

    $this->setDados(
        iconv('ISO-8859-1', 'UTF-8', $linha[0]),
        $linha[1],
        $linha[2]
    );
}

        fclose($handle);
    }

    public function setDados(
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

    public function getDados(): array
    {
        return $this->dados;
    }

    public function arquivoTxt(string $caminho): void
{
    $handle = fopen($caminho, 'r');

    while (!feof($handle)) {

        $linha = fgets($handle);

        if (trim($linha) == '') {
            continue;
        }

        $cpf = substr($linha, 0, 11);
        $nome = trim(substr($linha, 11, 30));
        $email = trim(substr($linha, 41, 50));

        $this->setDados(
            $nome,
            $cpf,
            $email
        );
    }

    fclose($handle);
}
}