<?php

namespace src;

class File
{
    // attributes
    private $data = array();

    // methods
    public function setData(string $name, string $cpf, string $email): void
    {
        array_push(
            $this->data,
            [
                'name' => iconv('iso-8859-1', 'utf-8', $name),
                'cpf' => $cpf,
                'email' => $email
            ]
        );
    }

    public function getData(): array
    {
        return $this->data;
    }

    public function readCSVFile($path): void
    {
        $handle = fopen($path, 'r');

        while (($line = fgetcsv($handle, 10000, ';', "\"", "\\")) !== false) {
            $this->setData($line[0], $line[1], $line[2]);
        }

        fclose($handle);
    }

    public function readTXTFile($path): void
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
    }
}
