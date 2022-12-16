<?php

// Inicializar variables
$ventas_menores_200 = 0;
$ventas_200_400 = 0;
$ventas_mayores_400 = 0;

// Bucle do while 
do {
  // Leer el valor de la venta
  $venta = readline("Ingrese el valor de la venta: ");

  // Clasificar la venta en una de las tres categorías
  if ($venta <= 200) {
    $ventas_menores_200++;
  } elseif ($venta <= 400) {
    $ventas_200_400++;
  } else {
    $ventas_mayores_400++;
  }

  // Preguntar al usuario si desea ingresar otra venta
  $seguir = readline("¿Desea ingresar otra venta? (S/N)");

} while (strtoupper($seguir) == "S");

// Mostrar el resultado
echo "El número de ventas menores a $200 es: $ventas_menores_200";
echo "El número de ventas entre $200 y $400 es: $ventas_200_400";
echo "El número de ventas mayores a $400 es: $ventas_mayores_400";

?>
