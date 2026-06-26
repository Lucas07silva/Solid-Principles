<?php

namespace src\Dao;

use src\BD;
use src\Interfaces\Cadastro;
use src\Interfaces\Notificacao;
use src\Componentes\Notificacao as NotificacaoComponent;

class ColetivoModel extends BD
implements Cadastro, Notificacao
{
    public function salvar()
    {
        // lógica
    }

    public function enviarNotificacao(
        NotificacaoComponent $notificacao
    )
    {
        // lógica
    }
}