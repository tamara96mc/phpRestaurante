<?php
include '../../template/Header/header.php';
?>
<div class="container">
    <h1>LOGIN DE USUARIO</h1>
    <form action="detalles_usuario.php" method="post">
        <fieldset>
            <h2>Credenciales de acceso</h2>
            <div class="form-group">
                <label for="correo">Correo de usuario:</label>
                <input type="email" class="form-control" id="correo-login" name="correo" placeholder="Correo">
            </div>
            <div class="form-group">
                <label for="contraseña">Contraseña de usuario:</label>
                <input type="password" class="form-control" id="contraseña-login" name="contraseña" placeholder="Contraseña">
            </div>
            <input type="submit" class="next btn btn-info" value="LOGIN">
</fieldset>
    </form>
</div>

<?php
include '../../template/Footer/footer.php';
?>