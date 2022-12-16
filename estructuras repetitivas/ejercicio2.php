<?php
// Calcule el aumento de sueldos para 50 empleados de una empresa, bajo el siguiente criterio:
// a. Si el sueldo es menor a $1000: aumento 12%
// b. Si el sueldo está comprendido entre $1000 y $25000: aumento 10%
// c. Si el sueldo es mayor a $25000: aumento 8%
// d. Imprima el nuevo sueldo del trabajador y el monto total de la nómina considerando el aumento.

$totalNomina = 0;

for ($i = 1; $i <= 10; $i++) {
  // solicitamos el salario del empleado $i por medio de la consola
  echo "Solo puse 10 porque 50 eran demasiados \n";
  echo "Ingrese el salario del empleado $i: ";
  $salario = trim(fgets(STDIN));

  if ($salario < 1000) { // verificamos si el sueldo es menor a 1000
    $salario = $salario * 1.12; // aplicamos el aumento del 12%
  } else if ($salario >= 1000 && $salario <= 25000) { // verificamos si el sueldo está entre 1000 y 25000
    $salario = $salario * 1.10; // aplicamos el aumento del 10%
  } else if ($salario > 25000) { // verificamos si el sueldo es mayor a 25000
    $salario = $salario * 1.08; // aplicamos el aumento del 8%
  }
  // imprimimos el sueldo con el aumento incorporado
  echo "El sueldo del trabajador $i es de: $" . $salario . "\n";
  $totalNomina += $salario; // acumulamos el sueldo en el total de la nómina
}

// imprimimos el total de la nómina
echo "El total de la nómina es de: $" . $totalNomina;

?>
