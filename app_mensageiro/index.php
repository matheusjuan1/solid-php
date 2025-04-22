<?php

use src\Email;
use src\Messenger;
use src\Sms;
use src\Whatsapp;

require __DIR__ . '/vendor/autoload.php';

$msg = new Messenger(new Email());
$msg->sendToken();

echo '<br />';

$msg2 = new Messenger(new Sms());
$msg2->sendToken();

echo '<br />';

$msg3 = new Messenger(new Whatsapp());
$msg3->sendToken();
