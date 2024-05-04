<?php

/**
 * Si quieres conocer más funciones para tratar los números
 * y otros datos, aquí está el resto
 * 
 * https://www.php.net/manual/es/book.var.php
 */

//Conversiones explícitas y por método

$numero = "10x";
$entero = (int)$numero; 
$entero = intval($numero);
echo $entero;

$string = '143.32653El';
$flotante = floatval($string);
echo $flotante;