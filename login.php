<?php
    include_once("templates/header.php")
?>  
    <div class="form_login">
        <h2>Login</h2>
        <form action="<?= $BASE_URL ?>helpers/teste-login.php" method="POST">
            <div class="form-group">
                <input type="text" class="form-control form-control-lg" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="password" class="form-control form-control-lg" name="pass" placeholder="Senha">
            </div>
            <button type="submit" class="btn btn-primary" id="login">Entrar</button>
        </form>
    </div>

<?php
    include_once("templates/footer.php")
?>