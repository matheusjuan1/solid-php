<?php

namespace src;

class Reader
{

    // attributes
    private $directory;
    private $file;

    // methods
    public function getDirectory(): string
    {
        return $this->directory;
    }

    public function getFile(): string
    {
        return $this->file;
    }

    public function setDirectory(string $directory): void
    {
        $this->directory = $directory;
    }

    public function setFile(string $file): void
    {
        $this->file = $file;
    }

    public function readFile(): array
    {
        $path = $this->getDirectory() . '/' . $this->getFile();

        $extension = explode('.', $this->getFile());

        $pathClass = '\src\extractor\\' . ucfirst($extension[1]);

        return call_user_func_array(
            [
                new $pathClass,
                'readFile'
            ],
            [
                $path
            ]
        );
    }
}
