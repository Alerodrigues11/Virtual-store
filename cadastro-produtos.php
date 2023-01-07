<?php
    include_once("templates/header.php");

    if(empty($_SESSION["Status"]) || $_SESSION["Status"] != 1 ) {
        header("Location:index.php");
    }
?>  
    <div class="container-fluid register__products--section">
        <h2 class="main__title--products">Cadastre o seu produto</h2>
        <form action="<?= $BASE_URL ?>helpers/process-db-cadastro-produtos.php" method="POST" enctype="multipart/form-data" class="form__products">
            <input type="hidden" name="type" value="create">
            <div class="form-group form__products--name">
                <label for="nomeproduto">Nome do Produto</label>
                <input type="text" class="form-control" id="nomeproduto" name="nomeproduto" required>
            </div>
            <div class="form-group form__products--category">
                <label for="categoriaproduto">Categoria</label>
                <input type="text" class="form-control" id="categoria" name="categoria" required>
            </div>
            <div class="form-group form__products--price">
                <label for="precoproduto">Preço</label>
                <input type="text" class="form-control" id="precoproduto" name="precoproduto" required>
            </div>
            <div class="form-group form__products--available">
                <label for="estoque">Quantidade Disponível</label>
                <input type="text" class="form-control" id="estoque" name="estoque" required>
            </div>
            <div class="form-group form__products--description">
                <label for="descricaoproduto">Descrição do Produto</label>
                <input type="text" class="form-control" id="descricaoproduto" name="descricaoproduto" required>
            </div>
            <div class="form-group form__products--img">
                <label for="imagemproduto">Arquivo de imagem</label>
                <input type="file" class="form-control" id="imagemproduto" name="imagemproduto" required>
            </div>
                <button type="submit" class="w-100 btn btn-success form__products--button">Cadastrar</button>
        </form>
    </div>