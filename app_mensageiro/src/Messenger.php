<?php

namespace src;

class Messenger
{
    // attributes
    private $channel;

    // methods
    public function getChannel(): string
    {
        return $this->channel;
    }

    public function setChannel($channel): void
    {
        $this->channel = $channel;
    }

    public function sendToken(): void
    {
        $path = '\src\\' . ucfirst($this->getChannel());

        $obj = new $path;
        $obj->send();
    }
}
