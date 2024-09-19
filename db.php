<?php
$host = 'localhost';
$db = 'login_sistema';
$user = 'root';  
$pass = '';  

// Crear la conexión
$conn = new mysqli($host, $user, $pass, $db);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>