<?php
include '../../template/Header/header.php';
?>

    <!-- - AÑADIMOS FORMULARIO ACTION USANDO POST PARA CONECTAR A LA FUNCIÓN
         - DESPUÉS AÑADIMOS EL FORMULARIO CON SUS INPUTS CORRESPONDIENTES -->

    <div class="container">
        <h1>Crear nuevo ingrediente</h1>
        <div class="progress">
            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0"
                aria-valuemax="100"></div>
        </div>

        <form action="action_ingrediente.php" method="post">
            <fieldset>
                <div class="form-group">
                    <label for="exampleInputnombre">Introduce el nombre del ingrediente:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre">
                </div>
                <div class="form-group">
                    <label for="exampleInputtipo">Introduce la cantidad:</label>
                    <input type="text" class="form-control" id="cantidad" name="cantidad" placeholder="cantidad">
                </div>
                <input type="submit" class="next btn btn-info" value="Siguiente">
            </fieldset>
        </form>
    </div>

    <?php
    
    include '../../template/Footer/footer.php';
    ?>