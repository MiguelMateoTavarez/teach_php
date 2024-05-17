<?php

namespace Miguelmateo\Calc;


class BasicCalculator implements CalculatorInterface
{
    public function operate(array $data): int
    {
        return match($data['operator']){
            '+' => self::addition($data),
            '-' => self::subtract($data),
            '*' => self::multiply($data),
            '/' => self::division($data),
            default => throw new \InvalidArgumentException('This operator ('.$data['operator'].') is not available'),
        };
    }

    protected function addition(array $data): int
    {
        return $data['firstValue'] + $data['secondValue'];
    }

    protected function subtract(array $data): int
    {
        return $data['firstValue'] - $data['secondValue'];
    }

    protected function multiply(array $data): int
    {
        return $data['firstValue'] * $data['secondValue'];
    }

    protected function division(array $data): int
    {
        return $data['firstValue'] / $data['secondValue'];
    }
}