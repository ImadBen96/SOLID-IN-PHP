<?php

namespace Classes;

use Interfaces\KeepingInterface;
use Interfaces\PlayerInterface;

class KeepingPlayer implements  PlayerInterface, KeepingInterface
{
    public function Keeping()
    {
        // TODO: Implement Keeping() method.
        $keeper= new ElhadaryChild();
        echo $keeper->Keeping();
    }

    public function play()
    {
        // TODO: Implement play() method.
        $this->Keeping();
    }
}