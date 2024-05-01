<?php
// Configuración de la base de datos
$dbHost = "localhsot";
$dbUsername = "root";
$dbPassword = "";
$dbName = "db_agenda";

$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($conn->connect_error) {
    die("Error en la conexión a la base de datos". $conn->connect_error);
}