<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ediatr</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="POST">
        <input type="text" name="nome" value="<?= $pessoa['nome'] ?>">
        <input type="email" name="email" value="<?= $pessoa['email'] ?>">
        <input type="text" name="telefone" value="<?= $pessoa['telefone'] ?>">
        <button type="submit">Atualizar</button>
    </form>
</body>
</html>


