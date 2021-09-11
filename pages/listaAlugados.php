<?php
$title = "Carros";
require_once realpath(dirname(__FILE__) . "/../config/config.php");
require_once realpath(dirname(__FILE__) . "/../parts/head.php");
require_once realpath(dirname(__FILE__) . "/../config/database.php");
require_once realpath(dirname(__FILE__) . "/../models/Carro.php");

$lista = new Carro();
$carros = $lista->listarAlugados();
?>

<?php if (is_array($carros)): ?>
    <table class="table table-hover container">
        <thead>
            <tr>
            <th scope="col">Marca</th>
            <th scope="col">Modelo</th>
            <th colspan="3" scope="col">Placa</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($carros as $carro): ?>
                <tr>
                    <td><?= $carro["marca"] ?></td>
                    <td><?= $carro["modelo"] ?></td>
                    <td><?= $carro["placa"] ?></td>
                    <td><a href="controllers/_aluguel.php?id=<?= $carro["id"] ?>&estado=2&pagina=listaAlugados" id="buttonAluguel" class="btn btn-success">Devolver</a></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
<?php 
endif; 
if(is_string($carros)): 
?>
    <div class="container">
        <div class="alert alert-warning text-center" role="alert">
            Nenhum veículo nessa sessão
        </div>
    </div>
<?php endif; ?>
<?php require_once realpath(dirname(__FILE__) . "/../parts/footer.php"); ?>