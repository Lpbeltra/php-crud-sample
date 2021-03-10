<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <h1 style="text-align: center;">Area de login</h1><br/>

    <form id="form" method="POST" action="login_action.php">
        <label>
            E-mail:
            <input type="text" name="email">
        </label><br></br>

        <label>
            Senha:
            <input type="password" name="password">
        </label><br></br>
        <input type="submit" value="Logar">
    </form>
    <a href="add.html">Cadastrar usuário</a>
</body>
</html>