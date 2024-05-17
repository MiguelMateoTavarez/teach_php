<?php

require __DIR__.'/vendor/autoload.php';

use Miguelmateo\Calc\AdvancedCalculator;
use Miguelmateo\Calc\BasicCalculator;

$calculator = new AdvancedCalculator();

$data = [];

$data['firstValue'] = readline('Set the first value: ');
$data['operator'] = readline('Set the operator (+, -, /, *): ');
$data['secondValue'] = readline('Set the first value: ');

echo $calculator->operate($data);