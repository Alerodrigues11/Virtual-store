<?php
    include_once("templates/header.php")
?>  
    <div class="login__section">
        <form class="form__login" action="<?= $BASE_URL ?>helpers/teste-login.php" method="POST">
            <div class="form-group">
                <input type="text" class="form-control form-control-lg" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="password" class="form-control form-control-lg" name="pass" placeholder="Senha">
            </div>
            <button type="submit" class="w-100 btn btn-primary form__login--button" id="login">ENTRAR</button>
        </form>
    </div>

<?php
    include_once("templates/footer.php")
?>