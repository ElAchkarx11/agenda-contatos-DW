<?php

include_once "config/url.php";
include_once "config/process.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Contato</title>
    <!-- boostrap include css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Boostrap include JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>

    <!-- Icones Boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- CSS do projeto -->

    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/estilo.css">
</head>

<body>
    <?php if (isset($_SESSION['id']) && !empty($_SESSION['id'])): ?>
        <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" id="logo" href="<?= $BASE_URL ?>/admin.php">
                    <img class="img-fluid" src="<?= $BASE_URL ?>/img/logo.svg" alt="Agenda Contatos"></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link color-white"
                            aria-current="page"
                            href="<?= $BASE_URL ?>/admin.php">Agenda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link color-white" href="<?= $BASE_URL ?>/adicionar.php">Adicionar Contatos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    <?php else: ?>
        <a href="<?= $BASE_URL ?>/config/logout.php">Você não está autenticado, volte para a tela inicial</a>
    <?php endif; ?>