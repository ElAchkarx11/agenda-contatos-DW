<?php

include_once "config/valida_login.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
        <title>Agenda Contatos - Login</title>

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
        <div class="row justify-content-center">


            <h1 class="text-center">Login</h1>
            <!-- Status do processo -->
            <?php
            if (isset($_SESSION['msg']) && !empty($_SESSION['msg'])): ?>

                <div class="alert alert-danger text-center" role="alert">
                    <?= $_SESSION['msg'] ?>
                </div>

                <?php

                //Limpa a mensagem após exibi-la
                $_SESSION['msg'] = '';
            endif;

            ?>
            <div class="col-5">
                <form action="<?= $BASE_URL ?>/config/valida_login.php" method="POST">
                    <label for="email">Email:</label>
                    <input name="email" id="email" type="email" class="form-control" placeholder="E-mail">
                    <label for="password">Senha:</label>
                    <input name="password" id="password" type="password" class="form-control" placeholder="Senha">

                    <button class="btn btn-primary btn-block mt-4 mb-4" type="submit">Entrar</button>

                </form>
                <a href="registro.php" class=""> Não possui registro? Cadastre-se!</a>

            </div>



        </div>
    </div>

</body>

</html>