<?php

require 'config.php';

$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$password = filter_input(INPUT_POST, 'password');

if ($email && $password) {
    $sql = $pdo-> prepare("DELETE FROM users WHERE password = :password AND email = :email");
    $sql->bindValue(':email', $email);
    $sql->bindValue(':password', $password);
    $sql->execute();
    header("Location: index.php");
} else {
    header("Location: add.html");
    exit;
}
