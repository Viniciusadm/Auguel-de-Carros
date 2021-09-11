<?php
class Carro {
    public function criar($marca, $modelo, $placa) {
        global $pdo;
        $sql = "INSERT INTO carros (marca, modelo, placa) values (:marca, :modelo, :placa)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(":marca", $marca);
        $stmt->bindValue(":modelo", $modelo);
        $stmt->bindValue(":placa", $placa);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function listar() {
        global $pdo;
        $sql = "SELECT * FROM carros";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $dados = $stmt->fetchAll();
            return $dados;
        } elseif ($stmt->rowCount <= 0) {
            return "Nenhum veículo cadastrado";
        }
    }

    public function listarAlugados() {
        global $pdo;
        $sql = "SELECT * FROM carros WHERE alugado = '2'";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $dados = $stmt->fetchAll();
            return $dados;
        } elseif ($stmt->rowCount <= 0) {
            return "Nenhum veículo cadastrado";
        }
    }

    public function selecionar($id) {
        global $pdo;
        $sql = "SELECT * FROM carros WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $dados = $stmt->fetch();
            return $dados;
        } elseif ($stmt->rowCount <= 0) {
            return "Veículo não encontrado";
        }
    }
    
    public function editar($id, $marca, $modelo) {
        global $pdo;
        $sql = "UPDATE carros SET marca = :marca, modelo = :modelo WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->bindValue(":marca", $marca);
        $stmt->bindValue(":modelo", $modelo);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function deletar($id) {
        global $pdo;
        $sql = "DELETE FROM carros WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function trocarEstado($id, $estado) {
        global $pdo;
        $sql = "UPDATE carros SET alugado = :estado WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->bindValue(':estado', $estado);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
}