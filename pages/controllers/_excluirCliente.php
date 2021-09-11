<?php
if (isset($_GET["id"]) && !empty($_GET["id"])) {
    require_once realpath(dirname(__FILE__) . "/../../config/database.php");
    require_once realpath(dirname(__FILE__) . "/../../models/Cliente.php");

    $id = addslashes($_GET['id']);
    $cliente = new Cliente();
    $cliente->deletar($id);
    header("Location: ../clientes.php");
}