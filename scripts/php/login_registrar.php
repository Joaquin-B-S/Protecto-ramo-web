<?php
require "conexion.php";
$nombre = $_POST["usuario"];
$password = $_POST["pass"];

if (isset($_POST["btningresar"])) {
    $query = mysqli_query($conn, "SELECT * FROM usuario WHERE login = '$nombre' AND pass = '$password'");
    $nr = mysqli_num_rows($query);
    if ($nr == 1) {
        echo "<script> alert('Bienvenido $nombre'); window.location='formulario_registrar.php'</script>";
    } else {
        echo "<script> alert('Usuario no existe o contraseña erronea'); window.location='../../src/login.php'</script>";
    }
}

if (isset($_POST["btnregistrar"])) {
    $sqlgrabar = "INSERT INTO usuario(login, pass) VALUES ('$nombre', '$password')";
    if (mysqli_query($conn, $sqlgrabar)) {
        echo "<script> alert('Usuario registrado con exito'); window.location='../../src/login.php'</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>