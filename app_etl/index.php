<?php

use src\Reader;

require __DIR__ . "/vendor/autoload.php";


$readerCSV = new Reader;
$readerCSV->setDirectory(__DIR__ . '/files');
$readerCSV->setFile('data.csv');
$arrCSV = $readerCSV->readFile();


$readerTXT = new Reader;
$readerTXT->setDirectory(__DIR__ . '/files');
$readerTXT->setFile('data.txt');
$arrTXT = $readerTXT->readFile();

echo '<pre>';
print_r(array_merge($arrTXT, $arrCSV));
echo '</pre>';
