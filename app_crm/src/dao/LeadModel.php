<?php

namespace src\dao;

use src\BD;
use src\components\Log;
use src\components\Notification;
use src\interfaces\IRegister;

class LeadModel extends BD implements IRegister
{

    // methods
    public function save()
    {
        // logica
    }

    public function registerLog(Log $log)
    {
        // logica
    }

    public function sendNotification(Notification $notification)
    {
        // logica
    }
}
