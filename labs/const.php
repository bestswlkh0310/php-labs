<?php

define('MAX_VALUE', 100);

echo MAX_VALUE . "\n";

# php v5부터 사용 가능

class MyClass
{
    const CONSTANT = 100;

    public function getConstant()
    {
        return self::CONSTANT;
    }
}

$cls1 = new MyClass();
$const = $cls1->getConstant();
echo $const;