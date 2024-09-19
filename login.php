<?php
session_start(); 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="CSS/style2.css">
    <style>
        .error { 
            color: red;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

    <form action="plogin.php" method="post">
        <h2>Iniciar sesión</h2>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <!-- Mostrar el mensaje de error si existe -->
        <?php
            if (isset($_SESSION['error_message']) && !empty($_SESSION['error_message'])) {
            echo '<p class="error">' . $_SESSION['error_message'] . '</p>';
             // Limpiar el mensaje de error después de mostrarlo
            unset($_SESSION['error_message']);
        }
        ?>
        <input type="submit" value="Iniciar sesión">
    </form>


</body>
</html>