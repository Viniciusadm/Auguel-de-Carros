<?php
session_start();

class Login {
    public function logar($usuario, $senha) {
        global $pdo;
        $sql = "SELECT * FROM usuarios WHERE usuario = :usuario and senha = :senha";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(":usuario", $usuario);
        $stmt->bindValue(":senha", md5($senha));
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $dado = $stmt->fetch();
            $_SESSION["idUsuario"] = $dado["id"];
            $_SESSION["nome"] = $dado["nome"];
            return true;
        } elseif ($stmt->rowCount <= 0) {
            return false;
        }
    }
}