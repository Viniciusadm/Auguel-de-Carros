<?php
if (isset($_POST["usuario"]) && !empty($_POST["usuario"]) && isset($_POST["senha"]) && !empty($_POST["senha"])) {
    require_once realpath(dirname(__FILE__) . "/../../models/Login.php");
    require_once realpath(dirname(__FILE__) . "/../../config/database.php");
    
    $usuario = addslashes($_POST["usuario"]);
    $senha = addslashes($_POST["senha"]);
    $login = new Login();
    
    if ($login->logar($usuario, $senha) === true) {
        if (isset($_SESSION['idUsuario'])) {
            header("Location: ../../index.php");
        } else {
            header("Location: ../login.php");
        }
    } elseif ($login->logar($usuario, $senha) === false) {
        header("Location: ../login.php");
    }
} else {
    header("Location: ../login.php");
}