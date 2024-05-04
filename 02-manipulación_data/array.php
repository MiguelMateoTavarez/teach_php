<?php

/**
 * Aquí tienes todos los métodos para manipular arreglos
 * 
 * https://www.php.net/manual/es/ref.array.php
 */

$arreglo = ["rojo", "verde", "azul"];

//Asignar un valor nuevo a un arreglo
array_push($arreglo, "amarillo");
$arreglo[]="amarillo";

print_r($arreglo);

//Distintas formas de eliminar un elemento de un arreglo
$arreglo = ["rojo", "verde", "azul", "amarillo"];
unset($arreglo[2]); 
array_pop($arreglo); 
array_shift($arreglo);
print_r($arreglo);

$arreglo1 = ["rojo", "verde"];
$arreglo2 = ["azul", "amarillo"];

//Combinar dos arreglos
$merge = array_merge($arreglo1, $arreglo2);
print_r($merge);

// [0] => rojo
// [1] => verde
// [2] => azul
// [3] => amarillo

//Del arreglo $merge, desde la segunda posición, tomar 1 elemento
$slice = array_slice($merge, 2, 1);
print_r($slice);

//Reemplazar en el arreglo $merge, un elemento contando desde la primera posición
$splice = array_splice($merge, 1, 1, "naranja"); 
print_r($splice);
print_r($merge);