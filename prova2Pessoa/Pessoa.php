<?php

include_once("crudPaulo.php");
/* Função que recebe nome,email e telefone e insere usuarios no banco de dados */

function insere_usuarios($nome, $email, $telefone)
{
    $dbname = conectDb();
    $sql = "INSERT INTO usuario (nome, email,telefone) VALUES (?, ?, ?)";
    $stmt = $dbname->prepare($sql);
    $stmt->bindValue(1, $nome, PDO::PARAM_STR);
    $stmt->bindValue(2, $email, PDO::PARAM_STR);

    try{
        $stmt->execute();
        echo "Usuáios inserido com sucesso!";
    } catch (PODException $e){
        echo "Erro ao inserir usuário: " . $e->getMessage();
    }

    $dbname = null;
}

/* função retorna */
function recupera_lista_usuarios(){
    $dbname = connectaBd();
    $sql = "SELECT * FROM usuarios";
    $stmt = $dbname->prepare($sql);
    $stmt->execute();
    $resultado = $stmt->fetchAll(PDO::FECTH_ASSOC);
    var_dump($resultado);
}

?>