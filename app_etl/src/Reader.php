<?php

namespace src;

use src\File;

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

        $file = new File();

        $extension = explode('.', $this->getFile());

        if ($extension[1] == 'csv') {
            $file->readCSVFile($path);
        } else if ($extension[1] == 'txt') {
            $file->readTXTFile($path);
        }

        return $file->getData();
    }
}
