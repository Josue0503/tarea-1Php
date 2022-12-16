<?php
// Dados 24 números reales que representan las temperaturas del exterior en un período de 24 horas. Encuentre la
// temperatura media del día y las temperaturas más alta y más baja del día.

$temperatures = array();
for ($i = 0; $i < 24; $i++) {
    $temperatures[] = rand(24, 36);
}

// Calcula la temperatura media del día
$mean_temperature = array_sum($temperatures) / count($temperatures);

// Encuentra la temperatura más alta y más baja del día
$max_temperature = max($temperatures);
$min_temperature = min($temperatures);

// Muestra los números generados y los resultados obtenidos
echo "Temperaturas del día: " . implode(', ', $temperatures) . "\n";
echo "Temperatura media del día: $mean_temperature\n";
echo "Temperatura más alta del día: $max_temperature\n";
echo "Temperatura más baja del día: $min_temperature\n";

?>