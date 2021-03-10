<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <h1 style="text-align: center;">Alterar senha</h1><br/>

    <form id="form" method="POST" action="update_action.php">
        <label>
            E-mail cadastrado:
            <input type="text" name="email">
        </label><br></br>

        <label>
            Senha atual:
            <input type="password" name="password">
        </label><br></br>

        <label>
            Nova senha:
            <input type="password" name="new_password">
        </label><br></br>
        <input type="submit" value="Alterar senha">
    </form>
    <a href="index.php">Voltar</a>
</body>
</html>