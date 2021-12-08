<?php
include '../../template/Header/Header.php';
?>
<div class="container">
    <h1>Recuperar contraseña</h1>
    <form action="action_RecuperarContraseña.php" method="post">
        <fieldset>
            <h2>Datos necesarios para reseteo de contraseña:</h2>
            <div class="form-group">
                <label for="nombre">Nombre de usuario:</label>
                <input type="text" class="form-control" id="nombre-recuperar" name="nombre" placeholder="Nombre de usuario">
            </div>
            <div class="form-group">
                <label for="correo">Correo de usuario:</label>
                <input type="email" class="form-control" id="correo-recuperar" name="correo" placeholder="Correo de usuario">
            </div>
            <div class="form-group">
                <label for="clave">Nueva clave:</label>
                <input type="password" class="form-control" id="clave-recuperar" name="clave" placeholder="clave nueva">
            </div>
            <input type="submit" class="next btn btn-info" value="RESET">
        </fieldset>
    </form>
    
</div>
<?php
include '../../template/Footer/Footer.php';

?>