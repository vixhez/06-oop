<?php

namespace App\Redux;

class Stringy
{
    private $string;

    public function __construct(string $string)
    {
        $this->string = $string;
    }

    public function lower() : Stringy
    {
        $this->string = strtolower($this->string);
        return $this;
    }

    public function repeat($n) : Stringy
    {
        $this->string = str_repeat($this->string, $n);
        return $this;
    }

    public function upper() : Stringy
    {
        $this->string = strtoupper($this->string);
        return $this;
    }

    public function append(string $addThis) : Stringy
    {
        $this->string = ($this->string . $addThis);
        return $this;
    }

    public function get() : string
    {
        return $this->string;
    }

    
}