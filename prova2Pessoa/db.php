<?php

function conectDb() {
    $host = 'localhost';
    $user = 'root';
    $pass = 'aluno';
    $dbname = 'crudPaulo';

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        echo "Erro ao conectar: " . $e->getMessage();
        return false;
    }
}

function check_conn($conn_id): void {
    if ($conn_id) {
        echo "Conexão concluída com sucesso!";
    } else {
        echo "Erro ao conectar";
    }
}

$conn = conectDb();
check_conn($conn);

?>
