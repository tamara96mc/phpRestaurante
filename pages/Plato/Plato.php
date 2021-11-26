<?php
include '../../template/Header/header.php';
?>

<div class="container">
    <h1>Crear nuevo plato</h1>
    <div class="progress">
        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
    </div>

    <form id="regiration_form" novalidate action="action_plato.php" method="post">
        <fieldset>
            <div class="form-group">
                <label for="titulo">Nombre del plato:</label>
                <input type="titulo" class="form-control" id="titulo" name="titulo" placeholder="Título">
            </div>
            <div class="form-group">
                <label for="exampleInputcomensales">Número de comensales:</label>
                <input type="comensales" class="form-control" id="comensales" name="comensales" placeholder="comensales">
            </div>
            <div class="form-group">
                <label for="exampleInputtipo">Tipo de plato:</label>
                <input type="tipo" class="form-control" id="tipo" name="tipo" placeholder="tipo">
            </div>
            <input type="submit" class="next btn btn-info" value="Siguiente">
        </fieldset>
    </form>
</div>

<?php

include '../../template/Footer/footer.php';
?>