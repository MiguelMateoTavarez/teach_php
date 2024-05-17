<?php

namespace Miguelmateo\Calc;

interface CalculatorInterface
{
    public function operate(array $data): int;
}