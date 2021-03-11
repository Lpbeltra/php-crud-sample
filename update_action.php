<?php

require 'config.php';

$id = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$password = filter_input(INPUT_POST, 'password');

if ($id ) {
    $sql = $pdo->prepare("SELECT * FROM users WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if ($sql->rowCount() > 0) {
        $sql = $pdo->prepare("UPDATE users SET password = :password, email = :email, name = :name WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->bindValue(':password', $password);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':name' , $name);
        $sql->execute();
        header("Location: list.php");
    }else {
        header("Location: update.php");
        exit;
    }
}