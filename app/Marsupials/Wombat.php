<?php

namespace App\Marsupials;

class Wombat
{
    private $wombatName;
    private $hugs = 0;

    public function __construct($wombatName)
    {
        $this->wombatName = $wombatName;
    }

    public function getName()
    {
        return $this->wombatName;
    }

    public function sayHelloTo($wombatFriend)
    {
        return "Hello {$wombatFriend->getName()}";
    }
    
    public function giveHug()
    {
        $this->hugs += 1;
        return $this;
    }

    public function howManyHugs()
    {
        return $this->hugs;
    }
}