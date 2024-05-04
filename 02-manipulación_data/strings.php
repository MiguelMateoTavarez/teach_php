<?php

/**
 * Si quieres ver todas las funciones disponibles para string, aquí las tienes
 * https://www.php.net/manual/es/ref.strings.php
 */

//Concatenación

$nombre = "Juan";
$apellido = "Pérez";
// $nombreCompleto = $nombre.' '.$apellido;
$nombreCompleto = "$nombre $apellido gana $10,000";
echo $nombreCompleto;

//Contar caractreres

$string = "Hola";
$longitud = strlen($string);
echo "La longitud de la cadena es: $longitud";

//Mayúsculas, minúsculas y capitalizadas

$string = "Hola Mundo";
$minusculas = strtolower($string);
$mayusculas = strtoupper($string);
$capitalizar = ucfirst($minusculas);
echo "En minúsculas: $minusculas";
echo PHP_EOL;
echo "En mayúsculas: $mayusculas";
echo PHP_EOL;
echo "Capitalizar: $capitalizar";

//Posición de una palabra, sustitución de una palabra

$string = "Hola {name}";
$posicion = strpos($string, "{name}");
$nuevaString = str_replace("{name}", "Juan Pérez", $string);
echo "La palabra '{name}' comienza en la posición $posicion";
echo PHP_EOL;
echo "La nueva cadena es: $nuevaString";