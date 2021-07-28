<?php include "encabezado.php"?>

<body>
    <main class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Registrar camion</h1>
                <form action="registrar.php" method="POST">
                    <div class="form-group">
                        <label for="patente">Patente</label>
                        <input placeholder="patente" class="form-control" type="text" name="patente" id="patente" required>
                    </div>
                    <div class="form-group">
                        <label for="marca">Marca</label>
                        <input placeholder="marca" class="form-control" type="text" name="marca" id="marca" required>
                    </div>
                    <div class="form-group">
                        <label for="modelo">Modelo</label>
                        <input placeholder="modelo" class="form-control" type="text" name="modelo" id="modelo" required>
                    </div>
                    <div class="form-group"><button class="btn btn-success">Guardar</button></div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>




