<?php

/**
 * Switch y match son dos estructuras condicionales que validan la igualdad entre un elemento principal
 * y un caso concreto, la diferencia entre el primero y el segundo es que, dentro de Switch, podemos construir
 * lógica compleja, dentro de match, solo retornamos lo que contenga el caso.
 */

define('GREET', 'Hi!');
define('FAREWELL', 'Bye!');

$value = 'Hi!';

switch ($value) {
    case GREET:
        echo "Greet logic!!";
        break;
    case FAREWELL:
        echo "Farewell logic!!";
        break;
    default:
        echo "Default logic!";
}

echo match ($value) {
    GREET => "Greet logic!",
    FAREWELL => "Farewell logic!",
    default => "Default logic",
};

/**
 * Si hacemos una comparativa entre el switch, el match y
 * la sentencia if, nos daremos cuenta que lo que hicimos
 * arriba, es igual a esto:
 */

if ($value == GREET) {
    echo "Greet logic!!";
} elseif ($value == FAREWELL) {
    echo "Farewell logic!!";
} else {
    echo "Default logic!";
}