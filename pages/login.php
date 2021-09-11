<?php
$title = "Login";
$file = "login";
require_once realpath(dirname(__FILE__) . "/../parts/head.php");
?>

<div id="corpo">
    <h2 class="mb-4">Acesso ao Sistema</h2>
    <form action="controllers/_login.php" method="post">
        <div class="group mb-1">
            <label class="lead" for="usuario">Usuário</label>
            <input required class="p-2" type="text" name="usuario" id="usuario">
        </div>
        <div class="group mb-1">
            <label class="lead mt-2" for="senha">Senha</label>
            <input required class="p-2" type="password" name="senha" id="senha">
        </div>
        <input class="mt-3 btn btn-primary" type="submit" value="Entrar">
    </form>
</div>

<?php require_once realpath(dirname(__FILE__) . "/../parts/footer.php"); ?>