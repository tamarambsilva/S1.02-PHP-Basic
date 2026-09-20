<?php

// Escribe una función para verificar la calificación de un alumno según su historial académico.

//Condiciones:

//Si la calificación es del 60% o más, el diploma debe ser de Primera División.
//Si la calificación está entre el 45% y el 59%, el diploma debe ser de Segunda División.
//Si la calificación está entre el 33% y el 44%, el diploma debe ser de Tercera División.
//Si la calificación es inferior al 33%, el alumno será reprobado.

function verificarNota($nota) {
    if ($nota >= 60) {
        return "Primera División";
    } elseif ($nota >= 45) {
        return "Segunda División";
    } elseif ($nota >= 33) {
        return "Tercera División";
    } else {
        return "Reprobado";
    }
}

echo "=== Resultado de las notas: ===" . PHP_EOL;

echo "Nota 75: " . verificarNota(75) . PHP_EOL;
echo "Nota 50: " . verificarNota(50) . PHP_EOL;
echo "Nota 40: " . verificarNota(40) . PHP_EOL;     
echo "Nota 20: " . verificarNota(20) . PHP_EOL;

echo PHP_EOL;

echo "=== Prueba de los límites ===" . PHP_EOL;

echo "Nota 60: " . verificarNota(60) . PHP_EOL;
echo "Nota 45: " . verificarNota(45) . PHP_EOL;
echo "Nota 33: " . verificarNota(33) . PHP_EOL;
echo "Nota 32: " . verificarNota(32) . PHP_EOL;