<?php

namespace src\Dao;

use src\BD;
use src\Interfaces\Cadastro;
use src\Componentes\Log;
use src\Componentes\Notificacao;

class UsuarioModel extends BD implements Cadastro
{
    public function salvar()
    {
        // lógica para salvar usuário
    }

    public function registrarLog(Log $log)
    {
        // lógica de log
    }

    public function enviarNotificacao(Notificacao $notificacao)
    {
        // lógica de notificação
    }
}