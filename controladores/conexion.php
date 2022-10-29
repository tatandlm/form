<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'ficha';

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);
// Chequear conexión
if ($conn->connect_error) {
    die("Conexión con errores: " . $conn->connect_error);
}