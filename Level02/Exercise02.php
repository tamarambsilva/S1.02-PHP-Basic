<?php

//Imagina que estás programando parte de la lógica de clasificación 
// de puntos de un juego. En este programa necesitamos entrar 3 puntuaciones 
// distintas (las puntuaciones son entre 0 y 9999). De estas puntuaciones necesitaremos:

//Su suma
//Su media
//La clasificación. Siendo "Principiante" menor de 4000. 
// "Intermedio" menor de 8000 y "Profesional" el resto.

function calcularSuma($puntuacion1, $puntuacion2, $puntuacion3)
{
    return $puntuacion1 + $puntuacion2 + $puntuacion3;
}

function calcularMedia($suma)
{
    return $suma / 3;
}

function obtenerClasificacion($suma)
{
    if ($suma < 4000) {
        return "Principiante";
    } elseif ($suma < 8000) {
        return "Intermedio";
    } else {
        return "Profesional";
    }
}

$puntuacion1 = 2000;
$puntuacion2 = 1500;
$puntuacion3 = 1000;

$suma = calcularSuma($puntuacion1, $puntuacion2, $puntuacion3);
$media = calcularMedia($suma);
$clasificacion = obtenerClasificacion($suma);

echo "=== Clasificación de puntos ===" . PHP_EOL;
echo "Puntuación 1: " . $puntuacion1 . PHP_EOL;
echo "Puntuación 2: " . $puntuacion2 . PHP_EOL;
echo "Puntuación 3: " . $puntuacion3 . PHP_EOL;
echo "Suma: " . $suma . PHP_EOL;
echo "Media: " . $media . PHP_EOL;
echo "Clasificación: " . $clasificacion . PHP_EOL;