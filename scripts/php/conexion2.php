<?php
$host = "cs.ilab.cl";
$usuario = "2_BD_04";
$contrasenia = "info2021!";
$base_de_datos = "2_BD_04";

$mysqli = new mysqli($host, $usuario, $contrasenia, $base_de_datos);
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
return $mysqli;
?>