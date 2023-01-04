<?php
    include_once("templates/header.php");
?>

    <div class="container-fluid contact__section">
        <h2 class="contact__section--title">NOS CONTATE OU VENHA NOS VISITAR!</h2>
        <div class="row">
            <div class="col contact">
                <form class="forms__contact" action="<?= $BASE_URL ?>helpers/envio-email.php" method="POST">
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
                    <button type="submit" class="w-100 btn btn-primary contact__btn">Enviar</button>
                </form>
            </div>

            <div class="col">
                <div class="maps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d466423.94262185355!2d-46.2818088!3d-24.03328485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce03b97cc7856f%3A0x3ff3e507b04bbc46!2sSantos%20-%20SP!5e0!3m2!1spt-BR!2sbr!4v1672797469158!5m2!1spt-BR!2sbr" width="650" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>

<?php
    include_once("templates/footer.php");
?>
