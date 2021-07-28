<?php
$mysqli = include_once "conexion2.php";
$patente = $_POST["patente"];
$marca = $_POST["marca"];
$modelo = $_POST["modelo"];
$sentencia = $mysqli->prepare("INSERT INTO camion
(patente, marca, modelo)
VALUES
(?, ?, ?)");
$sentencia->bind_param("sss", $patente, $marca, $modelo);
$sentencia->execute();
header("Location: listar.php");