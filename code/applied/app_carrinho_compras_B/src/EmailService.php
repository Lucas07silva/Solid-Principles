<?php

namespace src;

class EmailService
{
    private string $to;
    private string $subject;
    private string $content;

    public function __construct(
        string $to = 'contato@empresa.com.br',
        string $subject = '',
        string $content = ''
    ) {
        $this->to = $to;
        $this->subject = $subject;
        $this->content = $content;
    }

    public static function dispararEmail(): string
    {
        return 'Email enviado';
    }
}