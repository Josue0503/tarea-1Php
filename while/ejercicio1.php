<?php


$suma = 0;


$termino = 2;

// Recorre la serie hasta que el término sea mayor o igual a 1800
while ($termino < 1800) {
  // Suma 
  $suma += $termino;

  // Calcula el siguiente término de la serie
  $termino += 3;
}

// resultado
echo "Suma de los términos de la serie: $suma";

?>