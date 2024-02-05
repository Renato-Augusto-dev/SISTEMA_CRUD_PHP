<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema_crud_php</title>
</head>
<body>
    <section>
        <div class="login">
                <form action="entrar.php" method="POST">
                    <span><h1>Sistema Crud PHP</h1></span><br>
                    <input type="email" name="email" id="email" placeholder="E-mail" required><br>
                    <input type="password" name="senha" id="senha" placeholder="Senha" required><br>
                    <input type="submit" value="enviar" name="entrar"><br>
                    <a href="cadatro.php">Se não tem uma conta se cadastrar</a>
                </form>
        </div>
    </section>
</body>
</html>
