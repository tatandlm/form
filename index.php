<?php
session_start();

if (!isset($_SESSION['usuario']) || !isset($_SESSION['exito'])) {
    header("Location: buscar.php");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Inicio</title>
</head>

<nav>

    <div class="container">
        <ul class="list-image">
            <?php
            if ($_SESSION['exito'] == true) {
            ?>
                Ficha médica de <?= $_SESSION['usuario']['nombres'] . ' ' . $_SESSION['usuario']['apellidos']; ?>
            <?php
            } else {
            ?>
                Sin resultados
            <?php
            }
            ?>
        </ul>

    </div>

    </body>

</html>