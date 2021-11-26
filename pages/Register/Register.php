<?php

include '../../template/Header/header.php';
?>

    <form  class="register-form" action="action_register.php" method="post">
        <div>Nombre: <input type="text" name="nombre"></div>
        <div>Correo: <input type="text" name="correo"></div>
        <div>Contraseña: <input type="text" name="contraseya"></div>
        <input type="submit">
    </form>
<?php

include '../../template/Footer/footer.php';
?>