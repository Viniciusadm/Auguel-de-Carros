<?php
$title = "Novo";
require_once realpath(dirname(__FILE__) . "/../parts/head.php");
require_once realpath(dirname(__FILE__) . "/../config/config.php");
?>

<form action="controllers/_<?= $file ?>.php" method="post" class="container">
    <div class="mb-3">        
        <label class="form_label" for="marca_carro">Marca</label>
        <input class="form-control" type="text" name="marca_carro" maxlength="10" id="marca_carro">
    </div>
    <div class="mb-3">        
        <label class="form_label" for="modelo_carro">Modelo</label>
        <input class="form-control" type="text" name="modelo_carro" maxlength="10" id="modelo_carro">
    </div>
    <div class="mb-3">        
        <label class="form_label" for="placa_carro">Placa</label>
        <input class="form-control" type="text" name="placa_carro" maxlength="7" id="placa_carro">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Criar</button>
    </div>
</form>

<?php require_once realpath(dirname(__FILE__) . "/../parts/footer.php"); ?>