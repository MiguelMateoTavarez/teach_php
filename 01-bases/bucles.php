<?php

/**
 * Los bucles son funcionalidades que nos permite ejecutar un bloque
 * de código hasta que una condición se cumpla o hasta recorrer todo un elemento.
 */

/**
 * Foreach: Este bucle nos permite recorrer cualquier arreglo y obtener tanto
 * la representación de su llave como su valor, o su valor sin tomar en cuenta la llave.
 */

$days = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];

foreach ($days as $key => $day) {
    echo $key . "=>" . $day;
    echo PHP_EOL;
}

foreach ($days as $day) {
    echo $day;
    echo PHP_EOL;
}

/**
 * For: Este bucle nos permite iterar con base en un contador y nos permite ejecutar un bloque de código N veces 
 * hasta que N llegue a un límite previamente establecido.
 */

$multiple = 5;

for ($index = 0; $index <= 12; $index++) {
    $result = $index * $multiple;
    echo "$index X $multiple = $result";
    echo PHP_EOL;
}

/**
 * While: Este bucle nos permite iterar con base en un contador y nos permite ejecutar un bloque de código N veces
 * hasta que N llegue a un límite previamente establecido.
 */

$contador = 1;

while ($contador <= 5) {
    echo "Iteración $contador <br>";
    $contador++;
}

/**
 * Su gemelo, do-while nos permite hacer lo mismo, pero, como mínimo hará una ejecución
 */

$contador = 1;

do {
    echo "Iteración $contador <br>";
    $contador++;
} while ($contador <= 5);