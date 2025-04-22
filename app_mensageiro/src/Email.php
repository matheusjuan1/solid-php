<?php

namespace src;

class Email implements IMessengeToken
{

    // methods
    public function send(): void
    {
        echo 'E-mail: Seu token é 555-333';
    }
}
