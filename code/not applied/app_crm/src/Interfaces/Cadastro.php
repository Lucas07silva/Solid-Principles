<?php

namespace src\Interfaces;

use src\Componentes\Log;
use src\Componentes\Notificacao;

interface Cadastro
{
    public function salvar();

    public function registrarLog(Log $log);

    public function enviarNotificacao(Notificacao $notificacao);
}