<?php

function solveQuadratic(float $a, float $b, float $c): array
{
    if ($a === 0.0) {
        throw new \InvalidArgumentException("Coefficient a cannot be 0!");
    }
    $discriminant = $b ** 2 - 4 * $a * $c;
    if ($discriminant > 0) { //2 real roots
        $sqrtDiscriminant = sqrt($discriminant);
        return [
            (-$b + $sqrtDiscriminant) / (2 * $a),
            (-$b - $sqrtDiscriminant) / (2 * $a)
        ];
    } elseif ($discriminant == 0) { //1 real root
        return [
            -$b / (2 * $a)
        ];
    } else { //No real roots
        return [];
    }
}

echo implode("\n", solveQuadratic(a: 1, b: -6, c: -10));