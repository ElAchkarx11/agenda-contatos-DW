<?php

include_once "getUser.php";
include_once "url.php";
session_start();


$data = $_POST;
$usuario = getUser();

$usuario_autenticado = false;


if (!empty($data)) {
    foreach ($usuario as $user) {

        if ($user['email'] == $data['email'] && $user['password'] == $data['password']) {
            $usuario_autenticado = true;

        }

        if ($usuario_autenticado) {
            $_SESSION['id'] = $user['id'];
            $_SESSION['autenticado'] = 'SIM';
            $_SESSION["msg"] = "Bem vindo " . $user['name'];
            header("Location:" . "../admin.php");
            break;

        } else {
            $_SESSION['autenticado'] = 'NÃO';
            header("Location:" . "../index.php");
            $_SESSION["msg"] = "Erro ao logar";
        }


    }

}
?>