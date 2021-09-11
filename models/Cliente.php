<?php

class Cliente {
    public function criar($nome) {
        global $pdo;
        $sql = "INSERT INTO clientes (nome) values (:nome)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(":nome", $nome);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function listar() {
        global $pdo;
        $sql = "SELECT * FROM clientes";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $dados = $stmt->fetchAll();
            return $dados;
        } elseif ($stmt->rowCount <= 0) {
            return "Nenhum cliente cadastrado";
        }
    }

    public function deletar($id) {
        global $pdo;
        $sql = "DELETE FROM clientes WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
}