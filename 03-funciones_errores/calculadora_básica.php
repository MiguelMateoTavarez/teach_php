<?php

const OPERATORS = ['addition' => '+', 'subtract' => '-', 'multiply' => '*', 'division' => '/',];

$firstValue = readline('Set the first value: ');
$operator = readline('Set the operator(+, -, /, *) : ');
$secondValue = readline('Set the second value: ');

/**
 * @throws Exception
 */
function calculate(
    int|float $firstValue,
    int|float $secondValue,
    string $operator,
): int|float
{
    if(!in_array($operator, OPERATORS)) {
        throw new \Exception('Invalid operator');
    }

    return match ($operator) {
        OPERATORS['addition'] => $firstValue + $secondValue,
        OPERATORS['subtract'] => $firstValue - $secondValue,
        OPERATORS['multiply'] => $firstValue * $secondValue,
        OPERATORS['division'] => $firstValue / $secondValue,
};
}

try {
    echo calculate($firstValue, $secondValue, $operator);
} catch (Exception $e) {
    echo 'One or more errors occurred: ' . $e->getMessage();
}