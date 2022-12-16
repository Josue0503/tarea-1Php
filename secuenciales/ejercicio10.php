<?php
$hombres = 0;
$mujeres = 0;
$total = 0;
$totalH = 0;
$totalM = 0;
if (isset($_POST['procesar'])) {
    $hombres = $_POST['hombres'];
    $mujeres = $_POST['mujeres'];


    $total = $hombres + $mujeres;
    $totalH = ($hombres / $total) * 100;
    $totalM = ($mujeres / $total) * 100;
}


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Ejercicio</title>
</head>

<body>
    <header class="container">
        <h2>
            Promedio de hombres y mujeres
        </h2>
    </header>
    <main class="container">
        <form action="ejercicio10.php" method="POST">
            <fieldset class="row g-3">
                <legend>Ingrese datos</legend>

                <div class="col-md-4">
                    <label for="nota1" class="form-label">Hombres</label>
                    <input type="text" class="form-control" name="hombres" placeholder="0">
                </div>

                <div class="col-md-4">
                    <label for="nota1" class="form-label">Mujeres</label>
                    <input type="text" class="form-control" name="mujeres" placeholder="0">
                </div>
            </fieldset>


            <div class="col-12 my-2">
                <button type="submit" name="procesar" class="btn btn-success">Procesar</button>

                <div class="alert alert-primary" role="alert">
                    El porcentaje de hombres en el salón es de: <?php echo $totalH . "%"; ?> <br>
                    <hr>
                    El porcentaje de mujeres en el salón es de: <?php echo $totalM . "%"; ?> <br>
                    <hr>
                </div>
            </div>
        </form>
    </main>
</body>

</html>