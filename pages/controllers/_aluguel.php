<?php
if (isset($_GET["id"]) && !empty($_GET["id"]) && isset($_GET["estado"]) && !empty($_GET["estado"])) {
    require_once realpath(dirname(__FILE__) . "/../../config/database.php");
    require_once realpath(dirname(__FILE__) . "/../../models/Carro.php");

    $id = $_GET['id'];
    $estado = $_GET['estado'];
    $pagina = $_GET['pagina'];
    $estado = $estado === "1" ? "2" : "1";
    $carro = new Carro();
    if ($estado === 2) {
        $cliente = $_POST['cliente'];
        $carro->trocarEstado($id, $estado, $cliente);
    } else {
        $carro->trocarEstado($id, $estado);
    }
    header("Location: ../$pagina.php");
} else {
    header("Location: ../$pagina.php");
}