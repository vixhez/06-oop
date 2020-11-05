<?php

namespace App\Marsupials;

class Wombat
{
    private $wombatName;
    private $hugs = 0;

    public function __construct(string $wombatName)
    {
        $this->wombatName = $wombatName;
    }

    public function getName() : string
    {
        return $this->wombatName;
    }

    public function sayHelloTo($wombatFriend) : string
    {
        return "Hello {$wombatFriend->getName()}";
    }
    
    public function giveHug() : Wombat
    {
        $this->hugs += 1;
        return $this;
    }

    public function howManyHugs() : int
    {
        return $this->hugs;
    }
}