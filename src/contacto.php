<?php include('../includes/head.php') ?>
<body>
    <?php include('../includes/header.php') ?>
    <main class="contenedor">
        <form class="formulario">
            <div class="form">
                <h1 class="formulario__titulo">Contáctanos</h1>
                <div class="grupo">
                    <input class="formulario__input" type="text" required><span class="formulario__barra"></span>
                    <label class="formulario__label" for="">Nombre</label>
                </div>
                <div class="grupo">
                    <input class="formulario__input" type="text" required><span class="formulario__barra"></span>
                    <label class="formulario__label" for="">Apellido</label>
                </div>
                <div class="grupo">
                    <input class="formulario__input" type="tel" required><span class="formulario__barra"></span>
                    <label class="formulario__label" for="">Teléfono</label>
                </div>
                <div class="grupo">
                    <input class="formulario__input" type="email" required><span class="formulario__barra"></span>
                    <label class="formulario__label" for="">Correo</label>
                </div>
                <div class="grupo">
                    <textarea class="formulario__text" name="" id="" cols="30" rows="10" required></textarea>
                    <label for="" class="formulario__label-text">Mensaje</label>
                </div>
                
                <input class="formulario__btn" type="submit" value="Enviar">
                <input class="formulario__btn" type="reset" value="Restablecer">
            </div>
        </form>
    </main>
    <?php include('../includes/footer.php') ?>
</body>
</html>