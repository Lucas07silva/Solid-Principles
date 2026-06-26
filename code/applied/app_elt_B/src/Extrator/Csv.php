<?php

namespace src\Extrator;

class Csv extends Arquivo
{
    public function lerArquivo(string $caminho): array
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

        return $this->getDados();
    }
}