<?php
session_start();

include_once 'conexion.php';

$nombres = $_GET['nombres'];
$apellidos = $_GET['apellidos'];
$correo = $_GET['correo'];
$direccion = $_GET['direccion'];
$ciudad = $_GET['ciudad'];
$telefono = $_GET['telefono'];
$fecha_nac = $_GET['fecha_nac'];
$estado_civil = $_GET['estado_civil'];
$comentarios = $_GET['comentarios'];
$rut = $_GET['rut'];



$sql = "SELECT * FROM usuarios WHERE rut = '" . $rut . "'";
$result = $conn->query($sql);

if ($result->num_rows > 0 && !isset($_GET['continua'])) {
    echo 'La ficha ya existe. <a href="./registrer.php?rut=' . $rut .'&nombres=' . $nombres .'&apellidos=' . $apellidos .'&direccion=' . $direccion .'&ciudad=' . $ciudad .'&telefono=' . $telefono .'&correo=' . $correo .'&fecha_nac=' . $fecha_nac .'&estado_civil=' . $estado_civil .'&comentarios=' . $comentarios .'&continua=1">Desea continuar?</a> <br>Los datos serán <b>sobrescritos</b>.';
    die();
} else if(isset($_GET['continua'])){
  $sql = "UPDATE usuarios SET
    nombres = '" . $nombres . "', 
    apellidos = '" . $apellidos . "',
    correo = '" . $correo . "',
    direccion = '" . $direccion . "',
    ciudad = '" . $ciudad . "',
    telefono = '" . $telefono . "',
    fecha_nac = '" . $fecha_nac . "',
    estado_civil = '" . $estado_civil . "',
    comentarios = '" . $comentarios . "'
    WHERE rut = '" . $rut . "'";

} else {
  $sql = "INSERT INTO usuarios (
    nombres, 
    apellidos, 
    correo,
    direccion,
    ciudad,
    telefono,
    fecha_nac,
    estado_civil,
    comentarios,
    rut
  ) 
  VALUES 
  (
    '" . $nombres . "',
    '" . $apellidos . "',
    '" . $correo . "', 
    '" . $direccion . "',
    '" . $ciudad . "',
    '" . $telefono . "',
    '" . $fecha_nac . "',
    '" . $estado_civil . "',
    '" . $comentarios . "',
    '" . $rut . "'
  )";
}






if ($conn->query($sql) === TRUE) {
    header("Location: ../buscar.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
