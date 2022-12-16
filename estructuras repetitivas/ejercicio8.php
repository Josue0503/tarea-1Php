<?php

// arreglo para almacenar los datos de peso y altura de cada persona
$datos = array(
  array("peso" => 70, "altura" => 180, "sexo" => "M"),
  array("peso" => 60, "altura" => 160, "sexo" => "F"),
  // se puede hace de las personas que sean siempre y cuando sean añadidas ;)
);


$suma_peso = 0;
$suma_altura = 0;

// Recorra el arreglo y sume los valores de peso y altura de cada persona
foreach ($datos as $persona) {
  $suma_peso += $persona["peso"];
  $suma_altura += $persona["altura"];
}

//promedio
$promedio_peso = $suma_peso / count($datos);
$promedio_altura = $suma_altura / count($datos);

// resultado
print_r($datos);
echo "Promedio del peso: $promedio_peso kg \n";
echo "Promedio de la altura: $promedio_altura cm";

?>