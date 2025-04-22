<?php

namespace src;

class Messenger
{
    // attributes
    private $channel;

    // methods
    public function __construct(IMessengeToken $channel)
    {
        $this->setChannel($channel);
    }

    public function getChannel(): IMessengeToken
    {
        return $this->channel;
    }

    public function setChannel(IMessengeToken $channel): void
    {
        $this->channel = $channel;
    }

    public function sendToken(): void
    {
        $this->getChannel()->send();
    }
}
