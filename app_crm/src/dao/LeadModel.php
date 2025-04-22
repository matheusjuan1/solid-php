<?php

namespace src\dao;

use src\BD;
use src\components\Notification;
use src\interfaces\INotification;
use src\interfaces\IRegister;

class LeadModel extends BD implements IRegister, INotification
{

    // methods
    public function save()
    {
        // logica
    }

    public function sendNotification(Notification $notification)
    {
        // logica
    }
}
