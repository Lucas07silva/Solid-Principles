<?php

namespace src\Extrator;

class Txt extends Arquivo
{
    public function lerArquivo(string $caminho): array
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

        return $this->getDados();
    }
}