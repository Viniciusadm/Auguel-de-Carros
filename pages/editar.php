<?php
$title = "Editar Veículo";
require_once realpath(dirname(__FILE__) . "/../config/database.php");
require_once realpath(dirname(__FILE__) . "/../parts/head.php");
require_once realpath(dirname(__FILE__) . "/../models/Carro.php");
require_once realpath(dirname(__FILE__) . "/../config/config.php");

$id = $_GET['id'];
$lista = new Carro();
$carro = $lista->selecionar($id);
?>

<?php if (is_array($carro)): ?>
    <form action="controllers/_<?= $file ?>.php?id=<?= $id ?>" method="post" class="container">
        <div class="mb-3">
            <label class="form_label" for="marca_carro">Marca</label>
            <input required class="form-control" value="<?= $carro["marca"] ?>" type="text" name="marca_carro" maxlength="10" id="marca_carro">
        </div>
        <div class="mb-3">        
            <label class="form_label" for="modelo_carro">Modelo</label>
            <input required class="form-control" value="<?= $carro["modelo"] ?>" type="text" name="modelo_carro" maxlength="10" id="modelo_carro">
        </div>
        <div class="mb-3">        
            <label class="form_label" for="placa_carro">Placa</label>
            <input required disabled class="form-control" value="<?= $carro["placa"] ?>" type="text" name="placa_carro" maxlength="7" id="placa_carro">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Editar</button>
        </div>
    </form>
<?php endif ?>

<?php if (is_string($carro)): ?>
    <div class="container">
        <div class="alert alert-danger text-center" role="alert">
            Nenhum veículo encontrado
        </div>
    </div>
<?php endif ?>


<?php require_once realpath(dirname(__FILE__) . "/../parts/footer.php"); ?>