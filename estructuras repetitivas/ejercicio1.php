<?php
// archivo PHP que procesa los datos enviados a través del formulario

$aumento = 0;
$salario = 0;


if (isset($_POST['calcular'])) {
    $salario = $_POST['salario'];


    for ($i = 1; $i <= 20; $i++) {
        $salario = $_POST['salario'];
        if ($salario < 800) { // verificamos si el salario es inferior a 800
            $aumento = (($salario * 0.15) + $salario); // aplicamos el aumento del 15%
        } else{
            $aumento = $salario;
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Calcular salario</title>
</head>

<body>
    <main class="container">

        <form action="ejercicio1.php" method="post">
            <div class="col-md-4">
                <label>Salario:</label>
                <input type="text" class="form-control" name="salario" required>
            </div>
            <div class="col-12 my-2">
                <input type="submit" class="btn btn-success" name="calcular" value="Enviar" />
            </div>

            <div class="alert alert-primary" role="alert">
                    <?php     echo "El salario es de: $" . ($aumento); // imprimimos el salario con el aumento incorporado ?> <br>

                </div>
        </form>


    </main>



</body>

</html>