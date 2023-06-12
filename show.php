<?php

include_once "templates/header.php";
include_once "config/process_login.php";

?>



<?php if (isset($_SESSION['id']) && !empty($_SESSION['id'])): ?>

    <div class="container pt-4">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4">

                <a href="<?= $BASE_URL ?>/admin.php">
                    <button class="btn btn-outline-primary">Voltar</button>
                </a>

                <div class="text-center">
                    <h1>
                        <?= $contact['name'] ?>
                    </h1>
                </div>
                <div class="informacoes pt-4">
                    <p><strong>Telefone:</strong></p>
                    <p>
                        <?= $contact['phone'] ?>
                    </p>
                    <p><strong>Observações:</strong></p>
                    <p>
                        <?= $contact['observation'] ?>
                    </p>
                </div>
                

            </div>
        </div>
    </div>

<?php endif; ?>
<?php

include_once "templates/footer.php";

?>