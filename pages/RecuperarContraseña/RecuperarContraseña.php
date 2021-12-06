<?php

include '../../template/Header/header.php';
?>
<div class="container">
    <h1>Recuperar contraseña</h1>
    <form action="action_RecuperarContraseña.php" method="post">
        <fieldset>
            <h2>Datos necesarios para reseteo de contraseña:</h2>
            <div class="form-group">
                <label for="correo">Nombre de usuario:</label>
                <input type="text" class="form-control" id="nombre-recuperar" name="nombre" placeholder="Nombre de usuario">
            </div>
            <div class="form-group">
                <label for="contraseña">Correo de usuario:</label>
                <input type="email" class="form-control" id="correo-recuperar" name="correo" placeholder="Correo de usuario">
            </div>
            <div class="form-group">
                <label for="contraseña">Nueva contraseña:</label>
                <input type="password" class="form-control" id="contraseña-recuperar" name="contraseña" placeholder="Contraseña nueva">
            </div>
            <input type="submit" class="next btn btn-info" value="RESET">
        </fieldset>
    </form>
    
</div>
<?php
include '../../template/Footer/footer.php';

?>