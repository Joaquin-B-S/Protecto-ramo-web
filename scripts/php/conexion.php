<?php 
$dbhost = "cs.ilab.cl";
$dbuser = "2_BD_04";
$dbpass = "info2021!";
$dbname = "2_BD_04";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) {
    die("No hay Conexion: " . mysqli_connect_error());
}

?>