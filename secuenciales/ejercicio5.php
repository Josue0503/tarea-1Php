<?php
/*Escribir un programa que convierta un valor dado en grados Fahrenheit a grados Celsius. Recordar que la
fórmula para la conversión es: C = (F-32) *5/9*/

// Define la temperatura en grados Fahrenheit
$fahrenheit = 120;

// Convierte la temperatura a grados Celsius utilizando la fórmula matemática
$celsius = ($fahrenheit - 32) * (5/9);

// Imprime el resultado en pantalla
echo $celsius . " grados Celsius\n";
