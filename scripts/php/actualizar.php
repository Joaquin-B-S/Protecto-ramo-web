<?php
$mysqli = include_once "conexion2.php";
$id = $_POST["id"];
$patente = $_POST["patente"];
$marca = $_POST["marca"];
$modelo= $_POST["modelo"];

$sentencia = $mysqli->prepare("UPDATE camion SET
patente = ?,
marca = ?,
modelo = ?
WHERE id = ?");
$sentencia->bind_param("sssi", $patente, $marca, $modelo, $id);
$sentencia->execute();
header("Location: listar.php");
?>