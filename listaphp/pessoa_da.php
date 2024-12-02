<?php

include_once("bancoDeDados.php");
/* Função que recebe nome,email e insere usuarios no banco de dados */


function insere_usuarios($nome, $email)
{
    $db = conectDb();
    $sql = "INSERT INTO usuario (nome, email) VALUES (?, ?)";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(1, $nome, PDO::PARAM_STR);
    $stmt->bindValue(2, $email, PDO::PARAM_STR);

    try{
        $stmt->execute();
        echo "Usuáios inserido com sucesso!";
    } catch (PODException $e){
        echo "Erro ao inserir usuário: " . $e->getMessage();
    }

    $db = null;
}

/* função retorna */
function recupera_lista_usuarios(){
    $db = connectaBd();
    $sql = "SELECT * FROM usuarios";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $resultado = $stmt->fetchAll(PDO::FECTH_ASSOC);
    var_dump($resultado);
}

recupera_lista_usuarios();
?>