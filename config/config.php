<?php
$file = basename($_SERVER['PHP_SELF'],'.php');
session_start();
if (!isset($_SESSION['idUsuario'])) {
    if ($file === "index") {
        header("Location: pages/login.php");
    } else if ($file === "login") {
        header("");
    } else {
        header("Location: login.php");
    }
}