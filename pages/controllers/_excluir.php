<?php
if (isset($_GET["id"]) && !empty($_GET["id"])) {
    require_once realpath(dirname(__FILE__) . "/../../config/database.php");
    require_once realpath(dirname(__FILE__) . "/../../models/Carro.php");

    $id = addslashes($_GET['id']);
    $carro = new Carro();
    $carro->deletar($id);
    header("Location: ../lista.php");
}