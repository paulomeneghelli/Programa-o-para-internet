<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if ($_POST['username'] === 'cami' && $_POST['password'] === '123') {
            $_SESSION['logged_in'] = true;
            header('Location: index.php');
        } else {
            echo "Login inválido!";
        }
    }
    ?>
    <form method="POST">
        <input type="text" name="username" placeholder="Usuário">
        <input type="password" name="password" placeholder="Senha">
        <button type="submit">Entrar</button>
    </form>
</body>
</html>
