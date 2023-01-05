<?php
    include_once("templates/header.php")
?>  
    <div class="login__section">
        <form class="form__login" action="<?= $BASE_URL ?>helpers/teste-login.php" method="POST">
            <div class="form-group form__login--user">
                <input type="text" class="form-control form-control-lg" name="email" placeholder="Email">
            </div>
            <div class="form-group form__login--pass">
                <input type="password" class="form-control form-control-lg" name="pass" placeholder="Senha">
            </div>
            <button type="submit" class="w-100 btn form__login--button" id="login">ENTRAR</button>
            <p>Ainda não tem uma conta? <a href="<?=$BASE_URL?>cadastro-clientes.php">Criar conta</a></p>
        </form>
    </div>

<?php
    include_once("templates/footer.php")
?>