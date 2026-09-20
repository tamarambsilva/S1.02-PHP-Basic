<?php

// a) Declara dos variables X e Y de tipo int, dos variables N y M de tipo double y asigna a cada una un valor. A continuación, muestra por pantalla para X e Y:

//El valor de cada variable.
//La suma.
//El resto.
//El producto.
//El módulo.


$x = 10;
$y = 5;

$n = 10.5;
$m = 2.5;


// Operaciones con X e Y

$sumaXY = $x + $y;
$restaXY = $x - $y;
$productoXY = $x * $y;
$moduloXY = $x % $y;

echo "=== Operaciones con X e Y ===" . PHP_EOL;
echo "Valor de X: " . $x . PHP_EOL;
echo "Valor de Y: " . $y . PHP_EOL;
echo "Suma: " . $sumaXY . PHP_EOL;
echo "Resta: " . $restaXY . PHP_EOL;
echo "Producto: " . $productoXY . PHP_EOL;
echo "Módulo: " . $moduloXY . PHP_EOL;

echo PHP_EOL;


// Operaciones con N e M

$sumaNM = $n + $m;
$restaNM = $n - $m;
$productoNM = $n * $m;
$moduloNM = fmod($n, $m);

echo "=== Operaciones con N y M ===" . PHP_EOL;
echo "Valor de N: " . $n . PHP_EOL;
echo "Valor de M: " . $m . PHP_EOL;
echo "Suma: " . $sumaNM . PHP_EOL;
echo "Resta: " . $restaNM . PHP_EOL;
echo "Producto: " . $productoNM . PHP_EOL;
echo "Módulo: " . $moduloNM . PHP_EOL;

echo PHP_EOL;


// Doble de cada variable

$dobleX = $x * 2;
$dobleY = $y * 2;
$dobleN = $n * 2;
$dobleM = $m * 2;

echo "=== Doble de cada variable ===" . PHP_EOL;
echo "Doble de X: " . $dobleX . PHP_EOL;
echo "Doble de Y: " . $dobleY . PHP_EOL;
echo "Doble de N: " . $dobleN . PHP_EOL;
echo "Doble de M: " . $dobleM . PHP_EOL;

echo PHP_EOL;


// Suma y producto de todas las variables

$sumaTotal = $x + $y + $n + $m;
$productoTotal = $x * $y * $n * $m;

echo "=== Operaciones con todas las variables ===" . PHP_EOL;
echo "Suma total: " . $sumaTotal . PHP_EOL;
echo "Producto total: " . $productoTotal . PHP_EOL;

//----------------------

//b) Crea un programa que tenga una función que reciba dos números por parámetro, y en un tercer parámetro que indique una operación aritmética (suma, resta, multiplicación o división de los dos números).

// ¡Piensa en todos los casos posibles que debe tener este programa antes de hacerlo!



function calcular($numero1, $numero2, $operacion)
{
    switch ($operacion) {
        case "suma":
            return $numero1 + $numero2;

        case "resta":
            return $numero1 - $numero2;

        case "multiplicacion":
            return $numero1 * $numero2;

        case "division":
            if ($numero2 == 0) {
                return "No se puede dividir entre cero";
            }

            return $numero1 / $numero2;

        default:
            return "Operación no válida";
    }
}

// Pruebas de la función

echo "=== Función calcular ===" . PHP_EOL;

echo "Suma: " . calcular(10, 5, "suma") . PHP_EOL;
echo "Resta: " . calcular(10, 5, "resta") . PHP_EOL;
echo "Multiplicación: " . calcular(10, 5, "multiplicacion") . PHP_EOL;
echo "División: " . calcular(10, 5, "division") . PHP_EOL;