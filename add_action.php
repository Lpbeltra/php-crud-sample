<?php

require 'config.php';

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$password = filter_input(INPUT_POST, 'password');

if ($name && $email && $password) {
    $sql = $pdo-> prepare("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)");
    $sql->bindValue(':name', $name);
    $sql->bindValue(':email', $email);
    $sql->bindValue(':password', $password);
    $sql->execute();
    header("Location: index.php");
} else {
    header("Location: add.html");
    exit;
}
