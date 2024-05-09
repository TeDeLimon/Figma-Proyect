<?php

declare(strict_types=1);

$resultado = obtenerCifrasPares(2107683);
$resultado_2 = obtenerCifrasPares_2(2107683);
$resultado_3 = obtenerCifrasPares_3(2107683);

var_dump($resultado);
var_dump($resultado_2);
var_dump($resultado_3);

/**
 * Obtiene las cifras pares de un número
 * 
 * Convierte un número entero a cadena de texto y luego a un array de caracteres
 * 
 * Filtra aquellos caracteres que sean pares
 */
function obtenerCifrasPares(int $number): array|null
{

    $number_as_string = (string) $number;

    $number_as_array = str_split($number_as_string);

    return array_filter($number_as_array, fn ($digit) => ((int) $digit) % 2 === 0);
}

/**
 * Obtiene las cifras pares de un número
 * 
 * Convierte un número entero a cadena de texto y luego busca las cifras pares con una expresión regular
 */
function obtenerCifrasPares_2(int $numero): array|null
{

    $number_as_string = (string) $numero;

    $pattern = '/[02468]/';

    preg_match_all($pattern, $number_as_string, $matches);

    return $matches;
}

/**
 * Obtiene las cifras pares de un número
 * 
 * Convierte un número entero a cadena de texto y luego itera sobre cada caracter para buscar los pares
 */
function obtenerCifrasPares_3(int $number): array|null
{

    $number_as_string = (string) $number;

    $numerosPares = [];

    for ($i = 0; $i < strlen($number_as_string); $i++) {

        if (((int) $number_as_string[$i]) % 2 === 0) {

            $numerosPares[] = $number_as_string[$i];
        }
    }

    return $numerosPares;
}
