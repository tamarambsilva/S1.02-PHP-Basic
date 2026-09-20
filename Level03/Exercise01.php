<?php

// Ejercicio 1
// La criba de Eratóstenes es un algoritmo pensado para encontrar números 
// primos dentro de un intervalo dado. Basándote en la información del enlace 
// adjunto, implementa la criba de Eratóstenes dentro de una función, de tal 
// forma que podamos invocar la función para un número concreto.

function cribaEratostenes($n) {
    // Crear un array de booleanos para marcar los números primos
    $primos = array_fill(0, $n + 1, true);
    $primos[0] = $primos[1] = false; // 0 y 1 no son primos

    for ($i = 2; $i * $i <= $n; $i++) {
        if ($primos[$i]) {
            for ($j = $i * $i; $j <= $n; $j += $i) {
                $primos[$j] = false; // Marcar múltiplos de i como no primos
            }
        }
    }

    // Recoger los números primos en un array
    $resultado = [];
    for ($i = 2; $i <= $n; $i++) {
        if ($primos[$i]) {
            $resultado[] = $i;
        }
    }

    return $resultado;
}

$numero = 20;

$primos = cribaEratostenes($numero);

echo "Números primos hasta $numero:" . PHP_EOL;
echo implode(", ", $primos) . PHP_EOL;