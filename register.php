<?php
include ("conexion/conexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Registro</title>
</head>
<body>
    <div class="contenedor">
        <div class="con">
            <form method="post">
                
                <label for="name">Nombre</label>
                <input type="text" id = "name" required maxlength = "14" name = "name">
                <label for="last-name">Apellido paterno</label>
                <input type="text" id = "last-name" maxlength = "15" name = "last-name">
                <label for="email">Email</label>
                <input type="email" id = "email" maxlength = "30" name = "email">
                <label for="tel">Telefono</label>
                <input type="text" id = "tel" maxlength = "10" name = "tel">
                <label for="pass">Contrasenña</label>
                <input type="password" id = "pass" maxlength = "15" name = "pass">
                <button>Registrarse</button>
            </form>
        </div>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["name"];
    $apellido = $_POST["last-name"];
    $email = $_POST["email"];
    $telefono = $_POST["tel"];
    $pass = $_POST ["pass"];


    $sql = "INSERT INTO users (name, last-name, gmail,tel, password) VALUES ($nombre, $apellido, $email, $telefono, $pass)";
    }
    
    ?>


    <script src="scripts/validacion.js"></script>
</body>
</html>