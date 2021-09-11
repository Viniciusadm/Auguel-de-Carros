<?php
$title = "Carros";
require_once realpath(dirname(__FILE__) . "/../config/config.php");
require_once realpath(dirname(__FILE__) . "/../parts/head.php");
require_once realpath(dirname(__FILE__) . "/../config/database.php");
require_once realpath(dirname(__FILE__) . "/../models/Carro.php");

$lista = new Carro();
$carros = $lista->listar();
?>

<?php if (is_array($carros)): ?>
    <table class="table table-hover container">
        <thead>
            <tr>
            <th scope="col">Marca</th>
            <th scope="col">Modelo</th>
            <th scope="col">Placa</th>
            <th colspan="3" scope="col">Disponíbilidade</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($carros as $carro): ?>
                <tr>
                    <td><?= $carro["marca"] ?></td>
                    <td><?= $carro["modelo"] ?></td>
                    <td><?= $carro["placa"] ?></td>
                    <td class="labelAlugado"><?= $carro["alugado"] === "1" ? "Disponível" : "Alugado" ?></td>
                    <td><a href="controllers/_aluguel.php?id=<?= $carro["id"] . "&estado=" . $carro["alugado"] ?>" id="buttonAluguel" class="btn btn-<?= $carro["alugado"] === "1" ? "primary" : "success" ?>"><?= $carro["alugado"] === "1" ? "Alugar" : "Devolver" ?></a></td>
                    <td>
                        <a href="editar.php?id=<?= $carro["id"] ?>" id="alterar<?= $carro["id"] ?>" class="btn btn-warning">Alterar</a>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalExcluir<?= $carro['id'] ?>">
                        Excluir
                        </button>

                        <div class="modal fade" id="modalExcluir<?= $carro['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalExcluir<?= $carro['id'] ?>">Excluir</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Você deseja excluir: <?= $carro['marca'] . " " . $carro['modelo'] ?>?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                        <a href="controllers/_excluir.php?id=<?= $carro["id"] ?>" id="excluir<?= $carro["id"] ?>" class="btn btn-danger">Excluir</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
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
            Nenhum veículo cadastrado
        </div>
    </div>
<?php endif; ?>
<?php require_once realpath(dirname(__FILE__) . "/../parts/footer.php"); ?>