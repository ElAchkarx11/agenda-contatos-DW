<?php

include_once "templates/header.php";
include_once "config/process_login.php";



?>

<main>
    <?php if (isset($_SESSION['id']) && !empty($_SESSION['id'])): ?>
        <h1 class="text-center p-4">Meus Contatos</h1>

        <div class="container" id="tabela">

            <div class="row justify-content-center">
                <div class="col-md-8">

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


                    <?php if (count($contacts) > 0): ?>
                        <table class="table">
                            <thead class="">
                                <tr class="bg-primary color-white text-bold">
                                    <th scope="col">Nome</th>
                                    <th scope="col">Telefone </th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>

                            <tbody>

                                <?php foreach ($contacts as $contact): ?>
                                    <tr>
                                        <td scope="row">
                                            <?= $contact['name'] ?>
                                        </td>
                                        <td scope="row">
                                            <?= $contact['phone'] ?>
                                        </td>
                                        <td class="text-end">
                                            <a href="<?= $BASE_URL ?>/show.php?id=<?= $contact['id'] ?>">
                                                <i class="bi bi-eye-fill text-success"></i></a>
                                            <a href="<?= $BASE_URL ?>/alter.php?id=<?= $contact['id'] ?>"><i
                                                    class="bi bi-pencil-square text-primary"></i></a>

                                            <form class="d-inline-block" action="<?= $BASE_URL ?>/config/process.php" method="POST">

                                                <input type="hidden" name="type" value="remove">
                                                <input type="hidden" name="id" value="<?= $contact["id"] ?>">
                                                <input type="hidden" name="name" value="<?= $contact["name"] ?>">
                                                <button type="submit" class="btn-remove"><i
                                                        class="bi bi-x-lg text-danger"></i></button>
                                            </form>

                                        </td>
                                    </tr>

                                <?php endforeach; ?>

                            <?php else: ?>

                                <p>Sem nenhum contato? <a href="<?= $BASE_URL ?>/adicionar.php">Adicione aqui</a> </p>
                            <?php endif; ?>
                        </tbody>
                    </table>





                </div>
            </div>
            <a id="logout" class="btn btn-outline-danger fixed-bottom m-4  col-10 col-md-1 "
                href="<?= $BASE_URL ?>/config/logout.php">
                Sair
            </a>
        </div>


    <?php endif; ?>
</main>

<?php

include_once "templates/footer.php";

?>