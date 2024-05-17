<?php

namespace Miguelmateo\Calc;

class AdvancedCalculator extends BasicCalculator implements CalculatorInterface
{
    public function operate(array $data): int
    {
        return match($data['operator']){
            '+' => self::addition($data),
            '-' => self::subtract($data),
            '*' => self::multiply($data),
            '/' => self::division($data),
            '^' => self::power($data),
            default => throw new \InvalidArgumentException('This operator ('.$data['operator'].') is not available'),
        };
    }

    private function power(array $data): int
    {
        return pow($data['firstValue'], $data['secondValue']);
    }
}