<?php

//un arreglo para almacenar los datos de cada artículo
$articulos = array(
  array("nombre" => "Leche", "precio" => 3.50, "cantidad" => 2),
  array("nombre" => "Huevos", "precio" => 4.99, "cantidad" => 1),
  array("nombre" => "Pan", "precio" => 1.50, "cantidad" => 3),
  //se puede añadir mas :D
);

//  una variable para almacenar el total de las compras
$total = 0;

//  una variable para contar la posición actual del arreglo
$i = 0;

// Recorre el arreglo mientras haya más elementos
while (isset($articulos[$i])) {
  // Suma el precio de cada artículo multiplicado por su cantidad
  $total += $articulos[$i]["precio"] * $articulos[$i]["cantidad"];
  
  // Avanza a la siguiente posición del arreglo
  $i++;
}

// Imprime el resultado en pantalla
echo "Total de compras: $total";

?>