<?php

/**
 * Las condicionales evalúan la veracidad de una comparación
 * Si esta resulta ser verdadera, el código en su interior
 * es ejecutado, si resulta ser falsa, entonces será ignorado.
 * 
 * Estas son las comparaciones:
 * 
 * == : Idéntico
 * != : Diferente
 * < : Menor que
 * <= : Menor o igual que
 * > : Mayor que
 * >= : Mayor o igual que
 */


//Sintaxis

// if (condición) {
//     #Logic
// }elseif(condición){
//     #Logic
// }else {
//     #Logic
// }

//NOTA: PHP_EOL es un salto de línea que puede ser visualizado en la terminal.

/**
 * Aquí tenemos un ejemplo explícito de las condicionales
 */

$firstInteger = 10;
$secondInteger = 20;

if ($firstInteger == $secondInteger) {
    echo "true";
} else {
    echo "false";
}
echo PHP_EOL;

if ($firstInteger != $secondInteger) {
    echo "true";
} else {
    echo "false";
}
echo PHP_EOL;

if ($firstInteger < $secondInteger) {
    echo "true";
} else {
    echo "false";
}
echo PHP_EOL;

if ($firstInteger <= $secondInteger) {
    echo "true";
} else {
    echo "false";
}
echo PHP_EOL;

if ($firstInteger > $secondInteger) {
    echo "true";
} else {
    echo "false";
}
echo PHP_EOL;

if ($firstInteger >= $secondInteger) {
    echo "true";
} else {
    echo "false";
}
echo PHP_EOL;

//También podemos construir condicionales en formato ternario (de una línea)

echo ($firstInteger == $secondInteger) ? 'true' : 'false';
echo PHP_EOL;
echo ($firstInteger != $secondInteger) ? 'true' : 'false';
echo PHP_EOL;
echo ($firstInteger < $secondInteger) ? 'true' : 'false';
echo PHP_EOL;
echo ($firstInteger <= $secondInteger) ? 'true' : 'false';
echo PHP_EOL;
echo ($firstInteger > $secondInteger) ? 'true' : 'false';
echo PHP_EOL;
echo ($firstInteger >= $secondInteger) ? 'true' : 'false';
echo PHP_EOL;

//Los paréntesis son una preferencia personal, pero no son obligatorios