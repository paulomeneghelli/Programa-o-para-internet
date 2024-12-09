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
                <td><?= $pessoa['nome'] ?></td>
                <td><?= $pessoa['email'] ?></td>
                <td><?= $pessoa['telefone'] ?></td>
                <td>
                    <a id="editar" href="index.php?action=editar&id=<?= $pessoa['id'] ?>">Editar</a>
                    <a id="excluir" href="index.php?action=excluir&id=<?= $pessoa['id'] ?>">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
</table>
</body>
</html>
