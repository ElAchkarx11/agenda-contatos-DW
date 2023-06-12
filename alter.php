<?php

include_once "templates/header.php";

?>


<?php if (isset($_SESSION['id']) && !empty($_SESSION['id'])): ?>

    <div class="container">
        <div class="row justify-content-center" id="add-form">
            <div class="col-5">
                <h1 class="text-center">Alterar Contato</h1>
                <a href="<?= $BASE_URL ?>/admin.php">
                    <button class="btn btn-outline-primary">Voltar</button>
                </a>
                <form action="<?= $BASE_URL ?>/config/process.php" method="POST">
                    <input type="hidden" name="id" value="<?= $contact['id'] ?>">
                    <input type="hidden" name="type" value="alter">

                    <label for="nome">Nome da pessoa:</label>
                    <input type="text" id="name" name="name" class="form-control" value="<?= $contact['name'] ?>"
                        placeholder="Insira o nome aqui..." required>

                    <label for="fone">Telefone da pessoa:</label>
                    <input type="tel" pattern="[0-9,()]{4}[0-9]{5}-[0-9]{4}" id="phone" name="phone" value="<?= $contact['phone'] ?>" class="form-control"
                        placeholder="Insira numero aqui..." required>

                    <label for="nome">Observação:</label>
                    <textarea class="form-control" name="observation" id="observation" cols="30" rows="10"
                        placeholder="Insira a Observação..."><?= $contact['observation'] ?></textarea>
                    <button class="btn btn-primary mt-4">Adicionar</button>
                </form>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php

include_once "templates/footer.php";

?>