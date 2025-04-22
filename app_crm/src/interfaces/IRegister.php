<?php

namespace src\interfaces;

use src\components\Log;
use src\components\Notification;

interface IRegister
{

    // methods
    public function save();

    public function registerLog(Log $log);

    public function sendNotification(Notification $notification);
}
