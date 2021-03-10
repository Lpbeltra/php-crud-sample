<?php
require 'config.php';

$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$password = filter_input(INPUT_POST, 'password');

if($email && $password) {
    $sql = $pdo->prepare("SELECT * FROM users WHERE email = :email AND password = :password");
    $sql->bindValue(':password', $password);
    $sql->bindValue(':email', $email);
    $sql->execute();

    if ($sql->rowCount() > 0) {
        header("Location: home.html");
    } else {
        header("Location: index.php");
    }
} else {
    header("Location: index.php");
    exit;
}