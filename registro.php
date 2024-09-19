<?php
require 'db.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST["nombre"]);
    $username = htmlspecialchars($_POST["username"]);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); 
    // Verificar si el username ya existe
    $sql = "SELECT * FROM usuarios WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "El nombre de usuario ya está en uso. Por favor elige otro.";
    } else {
        // Insertar el nuevo usuario
        $sql = "INSERT INTO usuarios (nombre, username, password) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $nombre, $username, $password);

        if ($stmt->execute()) {
            echo "Usuario registrado exitosamente.";
            header("Location: login.php"); 
        } else {
            echo "Error al registrar el usuario.";
        }
    }
}
?>