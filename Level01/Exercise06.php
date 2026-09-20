<?php

//Charlie me mordió el dedo! Charlie te morderá el dedo exactamente el 50% del tiempo.

// Escribe la función isBitten() que devuelve TRUE con un 50% de probabilidad y FALSE de lo contrario.


function isBitten()
{
    if (rand(0, 1) === 1) {
        return true;
    } else {
        return false;
    }
}

echo "=== Charlie ===" . PHP_EOL;

for ($i = 1; $i <= 10; $i++) {
    echo (isBitten() ? "TRUE" : "FALSE") . PHP_EOL;
}

//Este ejercicio enseña a generar decisiones,
// verdadero o falso, y decisiones aleatorias.