<?php

include_once "templates/header.php";

?>
<?php if (isset($_SESSION['id']) && !empty($_SESSION['id'])): ?>
    <div class="container">
        <div class="row justify-content-center" id="add-form">
            <div class="col-5">
                <h1 class="text-center">Adicionar Contato</h1>
                <a href="<?= $BASE_URL ?>/admin.php">
                    <button class="btn btn-outline-primary">Voltar</button>
                </a>
                <form action="<?= $BASE_URL ?>/config/process.php" method="POST">

                    <input type="hidden" name="type" value="create">
                    <label for="nome">Nome da pessoa:</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Insira o nome aqui..."
                        required>

                    <label for="fone">Telefone da pessoa:</label>
                    
                    <input type="tel" pattern="[0-9,()]{4}[0-9]{5}-[0-9]{4}" id="phone" name="phone" class="form-control" placeholder="Ex.: (00)00000-0000"
                        required>
                    <label for="nome">Observação:</label>
                    <textarea class="form-control" name="observation" id="observation" cols="30" rows="10"
                        placeholder="Insira a Observação..."></textarea>
                    <button class="btn btn-primary mt-4">Adicionar</button>
                </form>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php

include_once "templates/footer.php";

?>