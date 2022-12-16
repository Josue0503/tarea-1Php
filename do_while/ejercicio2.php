<?php

// Inicializar variables para que no de error
$total_ventas = 0;
$num_empleados = 0;

// Bucle do...while para solicitar el número de ventas de cada empleado y sumarlas al total
do {
  // Solicitar al usuario el número de ventas realizadas por un empleado
  $num_ventas = readline("Ingrese el número de ventas del empleado: ");

  // Sumar el número de ventas al total de ventas
  $total_ventas += $num_ventas;

  // Incrementar
  $num_empleados++;

  // Preguntar al usuario si desea ingresar el número de ventas de otro empleado
  $seguir = readline("¿Desea ingresar el número de ventas de otro empleado? (S/N)");

} while (strtoupper($seguir) == "S");

// Calcular la media de ventas por empleado
$media_ventas = $total_ventas / $num_empleados;

// Mostrar el resultado final
echo "La media de ventas por empleado es: $media_ventas";

?>
