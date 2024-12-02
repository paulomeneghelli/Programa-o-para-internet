<?php
include_once("bancoDeDados.php");
include_once("pessoa_da.php");

if(isset($_POST["nome"]) && isset($_POST["email"])){
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    insere_usuarios($nome, $email);
} else{
    echo "Erro ao inserir usuários, informe todos os dados";
}

?>