<?php

namespace src\extractor;

class Txt extends File
{

    public function readFile($path): array
    {
        $handle = fopen($path, 'r');

        while (!feof($handle)) {
            $line = fgets($handle); // o ponteiro interno de leitura do arquivo é incrementado

            $name = substr($line, 11, 30);
            $cpf = substr($line, 0, 11);
            $email = substr($line, 41, 50);

            $this->setData($name, $cpf, $email);
        }

        fclose($handle);

        return $this->getData();
    }
}
