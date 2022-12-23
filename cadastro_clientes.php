<?php
    include_once("templates/header.php")

?>  
    <div class="container">
        <h2 class="main__title--clients">Sing Up</h2>
        <form action="<?= $BASE_URL ?>helpers/process_db_cadastro_clientes.php" class="form_clients" method="POST">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o seu nome" required>
            </div>
            <div class="form-group">
                <label for="sobrenome">Sobrenome:</label>
                <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Digite o seu sobrenome" required>
            </div>
            <div class="form-group">
                <label for="phone">Telefone:</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Digite o seu telefone" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Digite o seu e-mail" required>
            </div>
            <div class="form-group">
                <label for="pass">Senha:</label>
                <input type="password" class="form-control" id="pass" name="pass" placeholder="Digite a sua senha" required>
            </div>
                <button type="submit" class="w-100 btn btn-primary">Cadastrar</button>
        </form>
    </div>
<?php
    include_once("templates/footer.php")
?>