<?php

require 'config.php';

$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$password = filter_input(INPUT_POST, 'password');
$new_password = filter_input(INPUT_POST, 'new_password');

if ($email && $password && $new_password) {
    $sql = $pdo->prepare("SELECT * FROM users WHERE password = :password");
    $sql->bindValue(':password', $password);
    $sql->execute();

    if ($sql->rowCount() > 0) {
        $sql = $pdo->prepare('UPDATE users SET password = :new_password WHERE password = :password');
        $sql->bindValue(':new_password', $new_password);
        $sql->bindValue(':password', $password);
        $sql->execute();
        header("Location: index.php");
    }else {
        header("Location: update.php");
        exit;
    }
}