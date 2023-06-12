<?php

include_once "config/url.php";
include_once "config/process_login.php";


?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Contatos - Registro</title>
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
    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <a class="navbar-brand p-2" href="#">
            Agenda Contatos
        </a>
    </nav>
    <div class="container">
        <div class="row justify-content-center" id="add-form">

            <div class="col-5">
                <h1 class="text-center">Cadastrar usuário</h1>
                <form action="<?= $BASE_URL ?>/config/process_login.php" method="POST">

                    <input type="hidden" name="type" value="register">

                    <label for="name_reg">Nome: </label>
                    <input type="text" id="name_reg" name="name_reg" class="form-control"
                        placeholder="Insira o seu nome aqui..." required>

                    <label for="fone">Email: </label>
                    <input type="text" id="email" name="email" class="form-control" placeholder="Insira seu email..."
                        required>

                    <label for="nome">Senha: </label>
                    <input type="password" class="form-control" name="password" id="password"
                        placeholder="Insira sua senha..." required>

                    <button class="btn btn-primary mt-4 mb-4">Registrar</button>
                </form>
                <a href="index.php"> Já cadastrado? Faça login!</a>
            </div>
        </div>
    </div>
</body>