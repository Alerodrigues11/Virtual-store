<?php
    include_once("templates/header.php")

?>  
    <div class="container-fluid register__section">
        <form action="<?= $BASE_URL ?>helpers/process-db-cadastro-clientes.php" class="form__clients" method="POST">
            <div class="form-group form__clients--fields">
                <label for="nome">Nome</label>
                <input type="text" class="form-control form-control-lg" id="nome" name="nome" placeholder="Digite o seu nome" required>
            </div>
            <div class="form-group form__clients--fields">
                <label for="nome">Sobrenome</label>
                <input type="text" class="form-control form-control-lg" id="sobrenome" name="sobrenome" placeholder="Digite o seu sobrenome" required>
            </div>
            <div class="form-group form__clients--fields">
                <label for="phone">Telefone</label>
                <input type="text" class="form-control form-control-lg" id="phone" name="phone" placeholder="Digite o seu telefone" required>
            </div>
            <div class="form-group form__clients--fields">
                <label for="email">E-mail</label>
                <input type="text" class="form-control form-control-lg" id="email" name="email" placeholder="Digite o seu e-mail" required>
            </div>
            <div class="form-group form__clients--fields">
                <label for="pass">Senha</label>
                <input type="password" class="form-control form-control-lg" id="pass" name="pass" placeholder="Password" required>
            </div>
                <button type="submit" class="w-100 btn form__clients--button">Cadastrar</button>
        </form>
    </div>
<?php
    include_once("templates/footer.php")
?>