<?php

// Inicializa una variable para almacenar el total de las ventas
$ventas_totales = 0;

// Inicializa una variable para almacenar el total de descuentos aplicados
$descuentos_totales = 0;

// Repetir el proceso hasta que la tienda cierre
while (tienda_abierta()) {
  // Obtener el importe de la compra del cliente
  $importe_compra = obtener_importe_compra();

  // Obtener el color de la bolita del cliente
  $color_bolita = obtener_color_bolita();

  // Aplicar el descuento según el color de la bolita
  if ($color_bolita == "roja") {
    $descuento = $importe_compra * 0.4;
  } elseif ($color_bolita == "amarilla") {
    $descuento = $importe_compra * 0.25;
  } else {
    $descuento = 0;
  }

  // Calcular la cantidad que pagará el cliente
  $importe_pagar = $importe_compra - $descuento;

  // Actualizar el total de ventas y descuentos
  $ventas_totales += $importe_compra;
  $descuentos_totales += $descuento;
}

// Imprimir el resultado en pantalla
echo "Ventas totales: $ventas_totales";
echo "Descuentos totales: $descuentos_totales";

//me rindo, no pude:/

?>