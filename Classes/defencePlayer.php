<?php

namespace Classes;

use Interfaces\DefenseInterface;
use Interfaces\PlayerInterface;

class defencePlayer implements PlayerInterface,  DefenseInterface
{
    public function Defense()
    {
        echo "defense";
    }
    public function play()
    {
        // TODO: Implement play() method.
        $this->Defense();
    }

}