<?php
session_start(); 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="CSS/style3.css">
</head>
<body>

<?php
if (isset($_SESSION["usuario"])) {
    echo "<h1>¡Bienvenido, " . $_SESSION["usuario"] . "!</h1>";
} else {
    echo "<p>No has iniciado sesión.</p>";
}
?>

</body>
</html>
