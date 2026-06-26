<?php

namespace src\Dao;

use src\BD;
use src\Interfaces\Cadastro;
use src\Componentes\Log;
use src\Componentes\Notificacao;

class ColetivoModel extends BD implements Cadastro
{
    public function salvar()
    {
        // lógica para salvar coletivo
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