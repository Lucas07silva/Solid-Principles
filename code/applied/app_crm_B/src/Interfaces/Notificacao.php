<?php

namespace src\Interfaces;

use src\Componentes\Notificacao as NotificacaoComponent;

interface Notificacao
{
    public function enviarNotificacao(
        NotificacaoComponent $notificacao
    );
}