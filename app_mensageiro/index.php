<?php

use src\Messenger;

require __DIR__ . '/vendor/autoload.php';




$msg = new Messenger();
$msg->setChannel('email');
$msg->sendToken();

echo '<br />';

$msg2 = new Messenger();
$msg2->setChannel('sms');
$msg2->sendToken();
