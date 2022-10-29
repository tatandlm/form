<?php
session_start();

include_once 'conexion.php';

$apellidos = $_GET['apellidos'];

$sql = "SELECT * FROM usuarios WHERE apellidos = '" . $apellidos . "'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    $_SESSION['exito'] = true;

    $usuario = array();
    

    while($row = $result->fetch_assoc()) {
        $usuario = array(
           "usuario_id" =>  $row["usuario_id"],
           "nombres" =>  $row["nombres"],
           "apellidos" =>  $row["apellidos"],
           "direccion" =>  $row["direccion"],
           "comentarios" =>  $row["comentarios"]
        );
    }

    $_SESSION['usuario'] = $usuario;


    header("Location: ../index.php");
    die();
} else {
    $_SESSION['exito'] = false;
    $_SESSION['usuario'] = null;
    header("Location: ../buscar.php");
    die();
}
$conn->close();
