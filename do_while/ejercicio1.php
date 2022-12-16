<?php

// Definimos las constantes para los descuentos
define("DESCUENTO_LIBROS", 0.22);
define("DESCUENTO_REVISTAS", 0.16);
define("DESCUENTO_CUADERNOS", 0.1);
define("DESCUENTO_CONTADO", 0.06);

// Inicializamos la variable para almacenar el total
$total = 0;

// Iniciamos el ciclo do while
do {
  // Solicitamos la cantidad de artículos al usuario
  echo "Termina la ejecución al ingresar el 0 \n";
  echo "Ingrese la cantidad de artículos:  ";
  $cantidad = readline();

  // Si el usuario ingresa una cantidad válida, continuamos
  if ($cantidad > 0) {
    // Solicitamos el precio unitario del artículo al usuario
    echo "Ingrese el precio unitario: ";
    $precio = readline();

    // Solicitamos el tipo de artículo al usuario
    echo "Ingrese el tipo de artículo (libros, revistas, cuadernos): ";
    $tipo = readline();

    // Solicitamos el tipo de pago al usuario
    echo "Ingrese el tipo de pago (contado o crédito): ";
    $pago = readline();

    // Calculamos el precio total del pedido
    $precio_total = $cantidad * $precio;

    // Aplicamos el descuento correspondiente al tipo de artículo
    switch ($tipo) {
      case "libros":
        $precio_total *= (1 - DESCUENTO_LIBROS);
        break;
      case "revistas":
        $precio_total *= (1 - DESCUENTO_REVISTAS);
        break;
      case "cuadernos":
        $precio_total *= (1 - DESCUENTO_CUADERNOS);
        break;
    }

    // Aplicamos el descuento adicional si el pago es al contado
    if ($pago == "contado") {
      $precio_total *= (1 - DESCUENTO_CONTADO);
    }

    // Sumamos el precio total del pedido al acumulador
    $total += $precio_total;
  }
  // Continuamos el ciclo mientras el usuario ingrese una cantidad válida de artículos
} while ($cantidad > 0);

// Imprimimos el total final
echo "El total del pedido es: $total";

?>
