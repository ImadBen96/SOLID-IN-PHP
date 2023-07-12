<?php

namespace Classes;

use Interfaces\AttackInterface;
use Interfaces\PlayerInterface;

class AttackPlayer implements PlayerInterface, AttackInterface
{
    public function Attack()
    {
        // TODO: Implement Attack() method.
        echo "Attack";
    }

    public function play()
    {
        // TODO: Implement play() method.
        $this->Attack();
    }

}