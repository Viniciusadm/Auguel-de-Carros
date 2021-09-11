<?php
if (isset($_POST["marca_carro"]) && !empty($_POST["marca_carro"]) && isset($_POST["modelo_carro"]) && !empty($_POST["modelo_carro"]) && isset($_POST["placa_carro"]) && !empty($_POST["placa_carro"])) {
    require_once realpath(dirname(__FILE__) . "/../../models/Carro.php");
    require_once realpath(dirname(__FILE__) . "/../../config/database.php");
    
    $marca = addslashes($_POST['marca_carro']);
    $modelo = addslashes($_POST['modelo_carro']);
    $placa = addslashes($_POST['placa_carro']);

    $carro = new Carro();
    $carro->criar($marca, $modelo, $placa);
    header("Location: ../lista.php");
}