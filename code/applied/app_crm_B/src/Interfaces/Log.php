<?php

namespace src\Interfaces;

use src\Componentes\Log as LogComponent;

interface Log
{
    public function registrarLog(LogComponent $log);
}