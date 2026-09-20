# S1.02-PHP-Basic
Sprint 01

# S1.02 - PHP Básico

Ejercicios de introducción a la programación en PHP.

LEVEL 01

## Ejercicio 1 - Variables y constantes

En este ejercicio se han practicado:

* Variables de tipo entero (`int`)
* Variables de tipo decimal (`float`)
* Variables de tipo texto (`string`)
* Variables booleanas (`bool`)
* Impresión de valores con `echo`
* Saltos de línea con `PHP_EOL`
* Creación de constantes con `define()`

### Archivo

* `exercise01.php`

### Resultado

El programa muestra los valores de las variables y una constante que contiene mi nombre en formato de título.

----------------------

## Ejercicio 2 - Manipulación de strings

En este ejercicio se han practicado diferentes operaciones con cadenas de texto en PHP:

* Creación y uso de variables de tipo `string`
* Impresión de una variable con `echo`
* Conversión de una cadena a mayúsculas con `strtoupper()`
* Obtención de la longitud de una cadena con `strlen()`
* Inversión de una cadena con `strrev()`
* Concatenación de dos cadenas utilizando el operador `.`
* Uso de `PHP_EOL` para realizar saltos de línea

### Archivo

* `exercise02.php`

### Resultado

El programa muestra el mensaje original, su versión en mayúsculas, su longitud, la cadena invertida y, finalmente, la concatenación con otra cadena de texto.

## Ejercicios

* [x] Ejercicio 1 - Variables y constantes
* [x] Ejercicio 2 - Manipulación de strings
* [ ] Ejercicio 3
* [ ] Ejercicio 4


-----------------------------------------------------

## Ejercicio 3 - Operaciones y funciones

En este ejercicio se han practicado operaciones matemáticas y la creación de funciones en PHP.

### Parte A - Operaciones matemáticas

Se han trabajado:

* Declaración de variables de tipo entero (`int`)
* Declaración de variables de tipo decimal (`float`)
* Suma de dos números
* Resta de dos números
* Producto de dos números
* Módulo de números enteros utilizando `%`
* Módulo de números decimales utilizando `fmod()`
* Cálculo del doble de cada variable
* Suma de todas las variables
* Producto de todas las variables

### Parte B - Funciones

Se ha creado una función llamada `calcular()` que recibe:

* Dos números como parámetros
* Una operación matemática como tercer parámetro

La función permite realizar:

* Suma
* Resta
* Multiplicación
* División

También se han contemplado casos especiales como la división entre cero y una operación no válida.

### Archivo

* `exercise03.php`

### Resultado

El programa muestra los resultados de las diferentes operaciones matemáticas y permite realizar operaciones mediante una función dependiendo de la operación indicada.

_______________________________

## Ejercicio 4 - Función con repetición

En este ejercicio se ha creado una función que realiza una cuenta progresiva hasta un número determinado.

Se han practicado:

- Declaración de funciones con parámetros.
- Uso de parámetros con valores predeterminados.
- Uso de un bucle `for` para repetir una acción.
- Uso de un segundo parámetro para controlar el incremento de la cuenta.
- Mostrar los resultados paso a paso con `echo` y `PHP_EOL`.

### Archivo

- `exercise04.php`

### Resultado

La función permite contar hasta un número determinado y, si no se especifica el límite, utiliza 10 como valor predeterminado. También permite indicar el incremento de la cuenta.

_____________________________

## Ejercicio 5 - Función con condicionales

En este ejercicio se ha creado una función para comprobar la nota de un alumno y determinar su división académica.

Se han practicado:

- Declaración de funciones.
- Parámetros en funciones.
- Uso de `if`, `elseif` y `else`.
- Operadores de comparación.
- Uso de `return` para devolver un resultado.
- Comprobación de diferentes rangos de notas.

### Archivo

- `exercise05.php`

### Resultado

La función clasifica las notas en Primera División, Segunda División, Tercera División o Reprobado según el porcentaje obtenido

==============================================
==============================================

LEVEL 02

## Ejercicio 1 - Costo de una llamada

En este ejercicio se ha creado una función para calcular el costo de una llamada telefónica según su duración.

Se han practicado:

- Declaración de funciones.
- Parámetros en funciones.
- Uso de `if` y `else`.
- Operaciones matemáticas.
- Cálculo de minutos adicionales.
- Uso de `return` para devolver un resultado.

### Archivo

- `phplevel02/exercise01.php`

### Resultado

La función calcula un costo base de 0,10 € para llamadas de menos de 3 minutos y añade 0,05 € por cada minuto adicional a partir de los 3 primeros.