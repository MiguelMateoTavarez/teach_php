<?php

namespace Miguelmateo\Calc;

class BasicCalculator extends BaseCalculator
{
    public function operate(array $data): int
    {
        return match($data['operator']){
            '+' => self::addition($data),
            '-' => self::subtract($data),
        };
    }

    private function addition(array $data): int
    {
        return $data['firstValue'] + $data['secondValue'];
    }

    private function subtract(array $data): int
    {
        return $data['firstValue'] - $data['secondValue'];
    }

    //TODO: Multiplication private method
    //TODO: Division private method
}