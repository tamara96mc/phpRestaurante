<?php

include '../../template/Header/Header.php';
?>
    <form action="action_login.php" method="post">
        <div>Nombre: <input type="text" name="nombre"></div>
        <div>Contraseña: <input type="text" name="contraseya"></div>
        <input type="submit">
    </form>
    <?php

include '../../template/Footer/Footer.php';
?>