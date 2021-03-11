<?php
require 'config.php';
$lista = [];
$sql = $pdo->query("SELECT * FROM users");
if($sql->rowCount() > 0) {
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);        
}
?>

<table border="1" width="50%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>AÇÕES</th>
    </tr>
    <?php foreach($lista as $usuario):?>
        <tr>
            <td><?php echo $usuario['id'];?> </td>
            <td><?php echo $usuario['name'];?> </td>
            <td><?php echo $usuario['email'];?> </td>
            <td>
                <a href="update.php?id=<?=$usuario['id'];?>">Editar</a>
                <a href="delete.php?id=<?=$usuario['id'];?>" onclick="return confirm('Tem certeza que quer excluir?')">Excluir</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<br></br>
<a href="index.php">Voltar</a>