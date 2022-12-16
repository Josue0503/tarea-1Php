<?php

$num_positivos = 0;
$num_negativos = 0;
$num_nulos = 0;

for ($i = 1; $i <= 100; $i++) {
    // generar un número aleatorio
    $num = rand(-100, 100);

    // imprimir el número aleatorio
    echo "Número aleatorio: $num\n";

    // verificar si el número es positivo, negativo o nulo
    if ($num > 0) {
        $num_positivos++;
    } elseif ($num < 0) {
        $num_negativos++;
    } else {
        $num_nulos++;
    }
}

// imprimir resultados
echo "Positivos: $num_positivos\n";
echo "Negativos: $num_negativos\n";
echo "Nulos: $num_nulos\n";

?>
