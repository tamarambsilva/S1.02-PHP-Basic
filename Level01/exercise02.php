<?php

$mensaje = "Ola Mundo!";

echo $mensaje . PHP_EOL;

// Convierte todos los caracteres de la cadena a mayúsculas y los imprime en la pantalla.
// La función strtoupper() convierte todos los caracteres de la cadena a mayúsculas.

echo strtoupper($mensaje) . PHP_EOL;

// Muestra el tamaño (longitud) de la variable en la pantalla.
// La función strlen() devuelve el número de caracteres de la cadena.

echo strlen($mensaje) . PHP_EOL;

// Imprime la secuencia de caracteres en la pantalla en orden inverso.
// La función strrev() devuelve la cadena en orden inverso.

echo strrev($mensaje) . PHP_EOL;

// Crea una nueva variable con el contenido "Este es el curso de PHP" e imprime la concatenación de las dos cadenas en la pantalla.

$mensaje2 = "Este es el curso de PHP";
echo $mensaje . " " . $mensaje2 . PHP_EOL;
