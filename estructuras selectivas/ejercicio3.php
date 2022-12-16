<?php
// En un hospital se ingresa un paciente cobrándole $25 diarios por hospitalización. Si el paciente es operado
// deberá además cancelar $1000 por los gastos más 20% del pago total por honorarios del doctor. Dados n días
// que estuvo el paciente, escriba el nombre, número de días que estuvo ingresado y el detalle de todos los pagos
// hechos

// Define la función que calcula el pago total

function calcularPago($nombre, $dias, $operado)
{
    // Calcula el pago por hospitalización
    $pagoTotal = $dias * 25;

    // Agrega el costo de la operación si fue operado
    if ($operado) {
        $pagoTotal += 1000;
    }

    // Agrega los honorarios del doctor
    $honorarios = $pagoTotal * 0.2;
    $pagoTotal += $honorarios;

    return array(
        "nombre" => $nombre,
        "dias" => $dias,
        "pagoTotal" => $pagoTotal,
        "detalle" => "Pago por hospitalización: $dias x $25 = $" . ($dias * 25) . "\n" .
            "Costo de operación: $" . ($operado ? 1000 : 0) . "\n" .
            "Honorarios del doctor: $" . $honorarios . "\n" .
            "Pago total: $" . $pagoTotal
    );
}

$nombre = "";
$dias = 0;
// Obtiene los valores del formulario
$nombre = $_POST["nombre"];
$dias = $_POST["dias"];
$operado = isset($_POST["operado"]);

// Llamar a la función que calcula el pago total
$resultado = calcularPago($nombre, $dias, $operado);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Calcular gastos hospitalarios</title>
</head>

<body>

    <form method="post" action="ejercicio3.php">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre">
        </div>

        <div class="form-group">
            <label for="dias">Días ingresado:</label>
            <input type="number" class="form-control" id="dias" name="dias">
        </div>

        <div class="form-group">
            <label for="operado">Operado:</label>
            <input type="checkbox" class="form-check-input" id="operado" name="operado">
        </div>

        <input type="submit" class="btn btn-primary" value="Calcular pago">
    </form>

    <?php
    // Muestra el resultado en pantalla
    echo "Nombre: " . $resultado["nombre"] . "<br>";
    echo "Días ingresado: " . $resultado["dias"] . "<br>";
    echo "Detalle de pagos:<br>" ."<br>". $resultado["detalle"];
    ?>


</body>

</html>