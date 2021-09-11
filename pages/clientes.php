<?php
$title = "Clientes";
require_once realpath(dirname(__FILE__) . "/../config/config.php");
require_once realpath(dirname(__FILE__) . "/../parts/head.php");
require_once realpath(dirname(__FILE__) . "/../config/database.php");
require_once realpath(dirname(__FILE__) . "/../models/Cliente.php");

$lista = new Cliente();
$clientes = $lista->listar();
?>

<?php if (is_array($clientes)): ?>
    <table class="table table-hover container w-50">
        <thead>
            <tr>
            <th colspan="2" scope="col">Nome</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($clientes as $cliente): ?>
                <tr>
                    <td><?= $cliente["nome"] ?></td>
                    <td><a class="btn btn-danger" href="controllers/_excluirCliente.php?id=<?= $cliente["id"] ?>">Excluir</a></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <button id="novoCliente" onclick="mudarVisibilidade()" class="btn btn-primary">Novo Cliente</button>
    <label id="labelNome" class="escondido" for="nomeCliente">Nome</label>
    <input id="inputNome" class="escondido" type="text" name="nomeCliente" id="nomeCliente">
    <button id="adicionar" class="escondido btn btn-secondary" onclick="novoCliente()">Adicionar</button>
<?php 
endif; 
if(is_string($clientes)): 
?>
    <div class="container">
        <div class="alert alert-warning text-center" role="alert">
            Nenhum cliente cadastrado
        </div>
    </div>
<?php endif; ?>

<script>
    const mudarVisibilidade = () => {
        document.querySelector("#novoCliente").classList.add('escondido');
        document.querySelector("#labelNome").classList.remove('escondido');
        document.querySelector("#inputNome").classList.remove('escondido');
        document.querySelector("#adicionar").classList.remove('escondido');
    }
</script>

<?php require_once realpath(dirname(__FILE__) . "/../parts/footer.php"); ?>