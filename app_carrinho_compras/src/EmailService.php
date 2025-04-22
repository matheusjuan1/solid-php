<?php

namespace src;

class EmailService
{

    // attributes
    private $from;
    private $to;
    private $subject;
    private $body;

    // methods
    public function __construct(
        string $from = 'contato@site.com.br',
        string $to = '',
        string $subject = '',
        string $body = ''
    ) {
        $this->$from = $from;
        $this->$to = $to;
        $this->$subject = $subject;
        $this->$body = $body;
    }

    public static function sendEmail()
    {
        return "------ send E-mail ------";
    }
}
