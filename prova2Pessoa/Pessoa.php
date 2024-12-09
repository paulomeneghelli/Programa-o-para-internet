<?php
class Pessoa
{
    private $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function listar()
    {
        $stmt = $this->conn->prepare("SELECT * FROM pessoas");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function buscar($id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM pessoas WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function criar($dados)
    {
        $stmt = $this->conn->prepare("INSERT INTO pessoas (nome, email, telefone) VALUES (:nome, :email, :telefone)");
        return $stmt->execute($dados);
    }

    public function editar($dados)
    {
        $stmt = $this->conn->prepare("UPDATE pessoas SET nome = :nome, email = :email, telefone = :telefone WHERE id = :id");
        return $stmt->execute($dados);
    }

    public function excluir($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM pessoas WHERE id = :id");
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
