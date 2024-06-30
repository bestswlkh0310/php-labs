<?php

final class Axis
{
    private function __construct()
    {
        //NOOP
    }

    public const Y = 0;
    public const Z = 1;
    public const X = 2;

    public const FLAG_AXIS_POSITIVE = 1;

    public const DOWN = Axis::Y << 1;
    public const UP = (Axis::Y << 1) | self::FLAG_AXIS_POSITIVE;
    public const NORTH = Axis::Z << 1;
    public const SOUTH = (Axis::Z << 1) | self::FLAG_AXIS_POSITIVE;
    public const WEST = Axis::X << 1;
    public const EAST = (Axis::X << 1) | self::FLAG_AXIS_POSITIVE;

    public const OFFSET = [
        self::DOWN  => [ 0, -1,  0],
        self::UP    => [ 0, +1,  0],
        self::NORTH => [ 0,  0, -1],
        self::SOUTH => [ 0,  0, +1],
        self::WEST  => [-1,  0,  0],
        self::EAST  => [+1,  0,  0]
    ];
}

echo Axis::DOWN . "\n";
echo Axis::UP . "\n";
echo Axis::NORTH . "\n";
echo Axis::SOUTH . "\n";
echo Axis::WEST . "\n";
echo Axis::EAST . "\n";

echo implode(', ', Axis::OFFSET[Axis::NORTH]) . "\n";