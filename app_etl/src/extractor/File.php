<?php

namespace src\extractor;

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
}
