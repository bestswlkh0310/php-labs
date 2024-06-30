<?php

function echoLn($any)
{
    echo $any;
    echo "\n";
}

echoLn(pi());
echoLn(min(0, 150, 30, 20, -8, -200));
echoLn(max(0, 150, 30, 20, -8, -200));

function sum(...$numbers)
{
    $result = 0;
    foreach ($numbers as $number) {
        $result += $number;
    }
    return $result;
}

echoLn(rand(0, 9));