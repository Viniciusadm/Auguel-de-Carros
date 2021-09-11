<?php
session_start();
unset($_SESSION['idUsuario']);
unset($_SESSION['nome']);
header("Location: ../login.php");