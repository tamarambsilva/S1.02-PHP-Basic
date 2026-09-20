<?php

//Escribe un programa que implemente una función que cuente hasta un número determinado. 
// Si no se especifica ningún número, el valor predeterminado de la cuenta debe ser 10. 
// Además, la función debe tener un segundo parámetro que indique el incremento de la cuenta 
// (de 1 en 1, de 2 en 2...). La cuenta debe mostrarse en pantalla paso a paso.

function contar($numero = 10, $incremento = 1)
{
    for ($i = 1; $i <= $numero; $i += $incremento) {
        echo $i . PHP_EOL;
    }
}

echo "=== Cuenta de 1 en 1 ===" . PHP_EOL;
contar();

echo "=== Cuenta de 2 en 2 ===" . PHP_EOL;
contar(10, 2);

echo "=== Cuenta de 3 en 3 ===" . PHP_EOL;
contar(10, 3);

echo "=== Cuenta de 4 en 4 ===" . PHP_EOL;
contar(10, 4);

echo "=== Cuenta de 5 en 5 ===" . PHP_EOL;
contar(10, 5);


