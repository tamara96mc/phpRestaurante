<?php

include '../../template/Header/Header.php';
?>
    <div class="container">
        <h1>Crear nuevo usuario</h1>
        <form action="action_register.php" method="post">
            <fieldset>
                <h2>Datos de usuario</h2>
                <div class="form-group">
                    <label for="titulo">Nombre del usuario:</label>
                    <input type="text" class="form-control" id="nombre-registro" name="nombre" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <label for="titulo">Correo del usuario:</label>
                    <input type="email" class="form-control" id="correo-registro" name="correo" placeholder="Correo">
                </div>
                <div class="form-group">
                    <label for="titulo">Contraseña del usuario:</label>
                    <input type="password" class="form-control" id="clave-registro" name="clave" placeholder="Contraseña">
                </div>
                <input type="submit"class="next btn btn-info" value="CREAR USUARIO">
            </fieldset>
        </form>
    </div>

<?php

include '../../template/Footer/Footer.php';
?>