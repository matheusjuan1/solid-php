<?php

namespace src\extractor;

class Csv extends File
{

    public function readFile($path): array
    {
        $handle = fopen($path, 'r');

        while (($line = fgetcsv($handle, 10000, ';', "\"", "\\")) !== false) {
            $this->setData($line[0], $line[1], $line[2]);
        }

        fclose($handle);

        return $this->getData();
    }
}
