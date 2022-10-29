<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Seccion</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <nav>

        <h1 class="h1-3">Buscar ficha médica</h1>
        <br>



        <img class="imagen01" src="./img/imagen.jpg" height="569" width="400" title="inicio" />
        <style type="text/css">
            img[title=inicio] {
                float: left;
            }
        </style>

        <div class="contenedor">
            <div class="cabecera">
                <h2>Bienvenido</h2>
            </div>
            <form id="formulario" action="controladores/buscar.php">
                <div class="form-control">
                    <label for="apellidos">Apellidos</label>
                    <input name="apellidos" id="apellidos" type="text">
                    <p></p>
                </div>
                <input class="ingreso" type="submit" value="Buscar">
                <?php
                if (isset($_SESSION['exito'])) {
                    if ($_SESSION['exito'] == false) {
                ?>
                        <div style="background-color: red; color: white; padding: 10px; margin: 10px;-moz-border-radius: 7px;-webkit-border-radius: 7px;padding: 10px;">
                            <b>
                                ERROR
                            </b>
                            sin resultados!!!
                            <b>
                                Intente otra vez por favor.
                            </b>
                        </div>
                <?php
                    }
                }
                ?>

                <?php
                if (isset($_SESSION['no_existe'])) {
                    if ($_SESSION['no_existe'] == true) {
                ?>
                        <div style="background-color: red; color: white; padding: 10px; margin: 10px;-moz-border-radius: 7px;-webkit-border-radius: 7px;padding: 10px;">
                            <b>
                                ERROR
                            </b>
                            en el correo!!!
                            <b>
                                No hemos posido enviar el link.
                            </b>
                        </div>
                <?php
                    }
                }
                ?>
                <nav class="nav-1">
                    <br>
                    <a href="registrer.php">¿REGISTRAR?</a>
                </nav>
            </form>
        </div>
        <script src="app.js"></script>
</body>

</html>

<?php
session_destroy();
?>