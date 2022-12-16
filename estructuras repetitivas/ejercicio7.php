<?php

// Generar 100 enteros aleatorios entre 0 y 10
$numbers = array();
for ($i = 0; $i < 100; $i++) {
    $numbers[] = rand(0, 10);
}

// Contar el número de números mayores que cero
$numMcero = 0; //Numero Mayor que cero
foreach ($numbers as $number) {
    if ($number > 0) {
        $numMcero++;
    }
}

// Calcular el promedio de todos los números
$promTotal = array_sum($numbers) / count($numbers);

// Calcular el promedio de todos los números positivos
$promPos = array_sum(array_filter($numbers, function ($x) { return $x > 0; })) / $numMcero;

// Imprimir los números y los promedios
echo "Numeros: " . implode(',', $numbers) . "\n";
echo "Numeros mayores que 0: $numMcero\n";
echo "Promedio de todos los numeros: $promTotal\n";
echo "Promedio de los positivos: $promPos\n";

?>
