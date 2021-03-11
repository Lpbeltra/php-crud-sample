<?php
require 'config.php';

$info = [];
$id = filter_input(INPUT_GET, 'id');
if($id) {
    $sql = $pdo->prepare("SELECT * FROM users WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if($sql->rowCount() > 0) {
        $info = $sql->fetch(PDO::FETCH_ASSOC);
    }
} else {
    header("Location: list.php");
    exit;
}
?>

<form id="form" method="POST" action="update_action.php">
    <input type="hidden" name="id" value="<?=$info['id'];?>"/>
    <label>
        Nome:
        <input type="text" name="name" value="<?=$info['name'];?>">
    </label><br></br>

    <label>
        Email:
        <input type="text" name="email" value="<?=$info['email'];?>">
    </label><br></br>

    <label>
        Senha:
        <input type="password" name="password" value="<?=$info['password'];?>">
    </label><br></br>
    <input type="submit" value="Alterar">
</form>
<a href="index.php">Voltar</a>
