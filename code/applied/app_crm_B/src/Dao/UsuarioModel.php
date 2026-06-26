<?php

namespace src\Dao;

use src\BD;
use src\Interfaces\Cadastro;
use src\Interfaces\Log;
use src\Interfaces\Notificacao;

use src\Componentes\Log as LogComponent;
use src\Componentes\Notificacao as NotificacaoComponent;

class UsuarioModel extends BD
implements Cadastro, Log, Notificacao
{
    public function salvar()
    {
        // lógica
    }

    public function registrarLog(
        LogComponent $log
    )
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