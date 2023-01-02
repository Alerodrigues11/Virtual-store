<?php
    include_once("templates/header.php");
?>

    <div class="container">
        <div class="row">
            <div class="col">

                <h1>Maps</h1>

            </div>
            <div class="col">
                <h2>Nos Contate!</h2>
                <form action="<?= $BASE_URL ?>helpers/envio-email.php" method="POST">
                    <div class="form-group">
                        <label for="nome">Nome Completo</label>
                        <input type="text" class="form-control" name="nome" required>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="text" class="form-control" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="assunto">Assunto</label>
                        <input type="text" class="form-control" name="assunto" required>
                    </div>
                    <div class="form-group" >
                        <label for="mensagem">Mensagem</label>
                        <textarea name="mensagem" class="form-control" id="" cols="30" rows="10" required></textarea>
                    </div>
                    <button type="submit" class="w-100 btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>

<?php
    include_once("templates/footer.php");
?>
