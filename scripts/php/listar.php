<?php
$mysqli = include_once "conexion2.php";
$resultado = $mysqli->query("SELECT id, patente, marca, modelo FROM camion");
$camion = $resultado->fetch_all(MYSQLI_ASSOC);
?>
<?php include "encabezado.php"?>
<div class="row">
    <div class="col-12">
        <h1>Listado de camiones</h1>
    </div>
    <div class="col-12">
        <a class="btn btn-success my-2" href="formulario_registrar.php">Agregar nuevo</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Patente</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($camion as $cam) { ?>
                    <tr>
                        <td><?php echo $cam["id"] ?></td>
                        <td><?php echo $cam["patente"] ?></td>
                        <td><?php echo $cam["marca"] ?></td>
                        <td><?php echo $cam["modelo"] ?></td>
                        <td>
                            <a href="editar.php?id=<?php echo $cam["id"] ?>">Editar</a>
                        </td>
                        <td>
                            <a href="eliminar.php?id=<?php echo $cam["id"] ?>">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>