<?php

namespace src;

class Sms implements IMessengeToken
{

    // methods
    public function send(): void
    {
        echo 'SMS: Seu token é 888-222';
    }
}
