<?php
include_once 'getUser.php';

$usuario = getUser();


if ($usuario) {
    foreach ($usuario as $user) {
        echo "ID: " . $user['id'] . "<br>";
        echo "Nome: " . $user["name"] . "<br>";
        echo "Email: " . $user["email"] . "<br>";
        echo "Idade: " . $user["password"] . "<br>";
    }

} else {
    echo "Usuário não encontrado";
}