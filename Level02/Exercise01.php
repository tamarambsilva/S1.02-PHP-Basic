<?php

// Escribe una función que determine la cantidad total a pagar por una llamada telefónica según las siguientes premisas:
// Toda llamada que dure menos de 3 minutos tiene un coste de 10 céntimos.
// Cada minuto adicional a partir de los 3 primeros es un paso de contador y cuesta 5 céntimos.


function calcularCostoLlamada($duracion)
{
    if ($duracion < 3) {
        return 0.10;
    } else {
        $minutosAdicionales = $duracion - 3;

        return 0.10 + ($minutosAdicionales * 0.05);
    }
}

echo "=== Costo de llamadas ===" . PHP_EOL;

echo "1 minuto: " . calcularCostoLlamada(1) . " €" . PHP_EOL;
echo "2 minutos: " . calcularCostoLlamada(2) . " €" . PHP_EOL;
echo "3 minutos: " . calcularCostoLlamada(3) . " €" . PHP_EOL;
echo "4 minutos: " . calcularCostoLlamada(4) . " €" . PHP_EOL;
echo "6 minutos: " . calcularCostoLlamada(6) . " €" . PHP_EOL;