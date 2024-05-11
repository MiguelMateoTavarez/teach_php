<?php

namespace Miguelmateo\Calc;

abstract class BaseCalculator
{
    abstract public function operate(array $data): int;
}