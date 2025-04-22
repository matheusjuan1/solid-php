<?php

namespace src\dao;

use src\BD;
use src\components\Log;
use src\components\Notification;
use src\interfaces\ILog;
use src\interfaces\INotification;
use src\interfaces\IRegister;

class UserModel extends BD implements IRegister, ILog, INotification
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
