<?php
include_once("crudPaulo.php");
include_once("Pessoa.php");

if(isset($_POST["nome"]) && isset($_POST["email"])&& isset($_POST["telefone"])){
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    insere_usuarios($nome, $email,$telefone);
} else{
    echo "Erro ao inserir usuários, informe todos os dados";
}

?>