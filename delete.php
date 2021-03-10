<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <h1 style="text-align: center;">Deletar usuário</h1><br/>

    <form id="form" method="POST" action="delete_action.php">
        <label>
            E-mail cadastrado:
            <input type="text" name="email">
        </label><br></br>

        <label>
            Senha:
            <input type="password" name="password">
        </label><br></br>
        <input type="submit" value="Deletar">
    </form>
    <a href="index.php">Voltar</a>
</body>
</html>