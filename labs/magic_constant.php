<?php

trait wow
{
    function helloWow()
    {
        echo "Hello Wow \n";
    }
}

final class CLS
{
    use wow;
    function getInfo()
    {
        return [
            'class' => __CLASS__,
            'dir' => __DIR__,
            'file' => __FILE__,
            'function' => __FUNCTION__,
            'line' => __LINE__,
            'trait' => __TRAIT__,
            'method' => __METHOD__
        ];
    }
}

$c = new CLS();
echo implode("\n", $c->getInfo());