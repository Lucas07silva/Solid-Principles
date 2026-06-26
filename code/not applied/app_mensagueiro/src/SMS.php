<?php

namespace src;

class SMS implements MensagemToken
{
    public function enviar()
    {
        echo "Mensagem enviada por SMS. Seu token é 555333<br>";
    }
}