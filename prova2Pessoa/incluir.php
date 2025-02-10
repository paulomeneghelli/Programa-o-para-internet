<?php 
// Garantir que a variável $pessoas seja um array (mesmo que vazio)
$pessoas = []; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Listagem</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Listagem de pessoas</h1>
    <a id="cadastro" href="index.php?action=criar">Cadastrar Pessoa</a>
    <table>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($pessoas as $pessoa): ?>
            <tr>
                <td><?= htmlspecialchars($pessoa['nome']) ?></td>
                <td><?= htmlspecialchars($pessoa['email']) ?></td>
                <td><?= htmlspecialchars($pessoa['telefone']) ?></td>
                
            </tr>
        <?php endforeach; ?>
    </table>
