<?php

use src\dao\ContractModel;
use src\dao\LeadModel;
use src\dao\UserModel;

require __DIR__ . '/vendor/autoload.php';

$contractModel = new ContractModel();
$userModel = new UserModel();
$leadModel = new LeadModel();
