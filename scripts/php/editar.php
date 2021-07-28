<?php
$mysqli = include_once "conexion2.php";
$id = $_GET["id"];
$sentencia = $mysqli->prepare("SELECT id, patente, marca, modelo FROM camion WHERE id = ?");
$sentencia->bind_param("i", $id);
$sentencia->execute();
$resultado = $sentencia->get_result();
$camion = $resultado->fetch_assoc();
if (!$camion) {
    exit("No hay resultados para ese ID");
}

?>
<?php include "encabezado.php"?>
<div class="row">
    <div class="col-12">
        <h1>Actualizar camion</h1>
        <form action="actualizar.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $camion["id"] ?>">
            <div class="form-group">
                <label for="patente">Patente</label>
                <input value="<?php echo $camion["patente"] ?>" placeholder="patente" class="form-control" type="text" name="patente" id="patente" required>
            </div>
            <div class="form-group">
                <label for="marca">Marca</label>
                <input value="<?php echo $camion["marca"] ?>" placeholder="marca" class="form-control" type="text" name="marca" id="marca" required>
            </div>
            <div class="form-group">
                <label for="modelo">Modelo</label>
                <input value="<?php echo $camion["modelo"] ?>" placeholder="modelo" class="form-control" type="text" name="modelo" id="modelo" required>
            </div>
            <div class="form-group">
                <button class="btn btn-success">Guardar</button>
                <a class="btn btn-warning" href="listar.php">Volver</a>
            </div>
        </form>
    </div>
</div>
