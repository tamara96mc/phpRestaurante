<?php
include '../../template/Header/header.php';
?>
    <form action="action_plato.php" method="post">
        <div>Nombre del plato: <input type="text" name="titulo"></div>
        <div>Numero de comensales: <input type="text" name="comensales"></div>
        <div>Tipo de plato: <input type="text" name="tipo"></div>
        <input type="submit">
    </form>

<?php

include '../../template/Footer/footer.php';
?>
