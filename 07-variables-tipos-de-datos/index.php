<?php

/**
 * Tipos de datos con PHP:
 * 
 * Entero (int / integer) = 99
 * Flotantes o decimales (float / double) = 3.45
 * Cadenas (string) = "hola mamá"
 * Boleano (bool) = true|false
 * null
 * Array (colección de datos) [1,2,3,4,5,6]
 * Objetos
 */

$entero = 2193847;
$decimal = 23.42;
$texto = 'hola, soy un texto';
$boleano = true;
$nula = null;
$arregloSimple = [1,2,3,4,5];
$arregloAsociativo = array(
    'saludo'    => 'hola',
    'despedida' => 'adiós'
);

echo gettype($arregloAsociativo);