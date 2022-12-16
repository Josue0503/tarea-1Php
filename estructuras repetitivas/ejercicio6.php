<?php

// Define las variables necesarias
$base_salary = 1000;
$commission_percentage = 0.1;

// Recorre los vendedores y pide las ventas realizadas por teclado
for ($i = 1; $i <= 30; $i++) {
    echo "Ingrese las ventas del vendedor $i: ";
    $sales = readline();

    // Calcula el monto de comisiones y el total de ingresos de cada vendedor
    $commissions = $sales * $commission_percentage;
    $total_income = $base_salary + $commissions;

    // Muestra los resultados obtenidos
    echo "Salario base de $1000 \n";
    echo "Vendedor $i:\n";
    echo "Comisiones: $commissions\n";
    echo "Ingresos totales: $total_income\n";
}

?>
