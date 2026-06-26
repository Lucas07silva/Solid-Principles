<?php

namespace src;

class Email implements MensagemToken
{
    public function enviar()
    {
        echo "Mensagem enviada por E-mail. Seu token é 555333<br>";
    }
}