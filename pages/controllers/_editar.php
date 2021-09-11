<?php
if (isset($_POST["marca_carro"]) && !empty($_POST["marca_carro"]) && isset($_POST["modelo_carro"]) && !empty($_POST["modelo_carro"])) {
    require_once realpath(dirname(__FILE__) . "/../../models/Carro.php");
    require_once realpath(dirname(__FILE__) . "/../../config/database.php");
    
    $id = addslashes($_GET['id']);
    $marca = addslashes($_POST['marca_carro']);
    $modelo = addslashes($_POST['modelo_carro']);

    $carro = new Carro();
    $carro->editar($id, $marca, $modelo);
    header("Location: ../lista.php");
} else {
    header("Location: ../lista.php");
}