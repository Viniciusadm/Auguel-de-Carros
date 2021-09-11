<?php
if (isset($_GET["id"]) && !empty($_GET["id"]) && isset($_GET["estado"]) && !empty($_GET["estado"])) {
    require_once realpath(dirname(__FILE__) . "/../../config/database.php");
    require_once realpath(dirname(__FILE__) . "/../../models/Carro.php");

    $id = $_GET['id'];
    $estado = $_GET['estado'];
    $estado = $estado === "1" ? "2" : "1";
    $carro = new Carro();
    $carro->trocarEstado($id, $estado);
    header("Location: ../lista.php");
}