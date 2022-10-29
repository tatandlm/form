<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>

        <h1 class="h1-3">Ficha médica</h1>
        <br>

        <div class="contenedor_registro">
            <div class="cabecera">
                <h2>Crear Una Cuenta</h2>
            </div>
            <form id="formulario" action="controladores/registrer.php">

                <div class="form-control">
                    <label for="rut">R.U.T.</label>
                    <input name="rut" id="rut" type="text">
                    <p></p>
                </div>

                <div class="form-control">
                    <label for="usuario">Nombres</label>
                    <input name="nombres" id="usuario" type="text">
                    <p></p>
                </div>

                <div class="form-control">
                    <label for="apellidos">Apellidos</label>
                    <input name="apellidos" id="apellidos" type="text">
                    <p></p>
                </div>

                <div class="form-control">
                    <label for="direccion">Dirección</label>
                    <input name="direccion" id="direccion" type="text">
                    <p></p>
                </div>

                <div class="form-control">
                    <label for="ciudad">Ciudad</label>
                    <select class="form-control" name="ciudad" id="ciudad">
                        <option value="santiago">Santiago</option>
                        <option value="punta_arenas">Punta Arenas</option>
                        <option value="puerto_montt">Puerto Montt</option>
                        <option value="puerto_varas">Puerto Varas</option>
                        <option value="concepcion">Concepción</option>
                        <option value="iquique">Iquique</option>
                    </select>
                    <p></p>
                </div>

                <div class="form-control">
                    <label for="telefono">Teléfono</label>
                    <input name="telefono" id="telefono" type="text">
                    <p></p>
                </div>


                <div class="form-control">
                    <label for="email">Correo Electrónico</label>
                    <input name="correo" id="email" type="email">
                    <p></p>
                </div>

                <div class="form-control">
                    <label for="fecha_nac">Fecha de nacimiento</label>
                    <input name="fecha_nac" id="fecha_nac" type="date">
                    <p></p>
                </div>

                <div class="form-control">
                    <label for="estado_civil">Estado civil</label>
                    <select class="form-control" name="estado_civil" id="estado_civil">
                        <option value="soltero">Soltero</option>
                        <option value="casado">Casado</option>
                        <option value="union_civil">Unión civil</option>
                    </select>
                    <p></p>
                </div>

                <div class="form-control">
                    <label for="comentarios">Comentarios</label>
                    <textarea name="comentarios" id="comentarios"></textarea>
                    <p></p>
                </div>

                <input class="ingreso" type="submit" value="Registrar ficha">
                <br>
                <input class="reset" type="reset" value="Limpiar">



                <nav class="nav-1">

                    <br>
                    <br>
                    <a href="buscar.php">¿YA EXISTE LA FICHA? REALIZA UNA BÚSQUEDA</a>
                </nav>

            </form>
        </div>

        <script src="app2.js"></script>
</body>

</html>