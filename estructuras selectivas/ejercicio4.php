<?php
// En un supermercado se hace una promoción mediante la cual el cliente obtiene un descuento dependiendo de
// un número que escoge al azar. Si el número escogido es menor a 74 el descuento es del 15% sobre el total de la
// compra y si es mayor o igual a 74 es de 20%. Obtener cuánto dinero se le descuenta y el pago final.


// Obtener el total de la compra del cliente
$totalCompra=0;
$totalCompra = $_POST['totalCompra'];

// Generar un número al azar entre 0 y 100
$numero = rand(0, 100);

// Si el número es menor a 74, aplicar un descuento del 15%
if ($numero < 74) {
  $descuento = 0.15 * $totalCompra;
} else {
  // Si el número es mayor o igual a 74, aplicar un descuento del 20%
  $descuento = 0.20 * $totalCompra;
}

// Calcular el pago final restando el descuento del total de la compra
$pagoFinal = $totalCompra - $descuento;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
  integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Compras</title>
</head>
<body>
    
<form action="ejercicio4.php" method="post" class="form-inline">
  <label for="totalCompra" class="mr-sm-2">Total de la compra:</label>
  <input type="number" name="totalCompra" id="totalCompra" class="form-control mb-2 mr-sm-2"><br>
  <input type="submit" value="Calcular descuento" class="btn btn-primary mb-2">
</form>

<div class="alert alert-primary" role="alert">
El pago final es: <?php echo  $pagoFinal; ?>
          </div>
          
</body>
</html>