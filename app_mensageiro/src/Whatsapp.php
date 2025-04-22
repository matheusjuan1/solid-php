<?php

namespace src;

class Whatsapp implements IMessengeToken
{

    // methods
    public function send(): void
    {
        echo 'Whatsapp: Seu token é 123-321';
    }
}
