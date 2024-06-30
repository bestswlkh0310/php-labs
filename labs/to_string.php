<?php

class WowClass
{
    private $var = 10;

    public function __toString(): string
    {
        return "var=$this->var";
    }
}

$wow = new WowClass();
echo $wow;