<?php

namespace src\interfaces;

use src\components\Notification;

interface INotification
{

    // methods
    public function sendNotification(Notification $notification);
}
