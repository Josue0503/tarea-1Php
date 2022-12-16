<?php
// Dados como datos 300 números enteros, obtener la suma de los números impares y el promedio de los números
// pares
$numbers = array();
for ($i = 0; $i < 300; $i++) {
    $numbers[] = rand(1, 1000);
}



$impares = array();
$pares = array();
foreach ($numbers as $number) {
    if ($number % 2 == 0) {
        $pares[] = $number;
    } else {
        $odd_numbers[] = $number;
    }
}

// Calcula la suma de los números impares y el promedio de los números pares
$impares = array_sum($impares);
$pares = array_sum($pares) / count($pares);

// Muestra los resultados obtenidos
echo "Números generados: " . implode(', ', $numbers) . "\n";
echo "Suma de números impares: $impares\n";
echo "Promedio de números pares: $pares\n";

?>


?>