<?php
    include_once("templates/header.php")

?>  
    <div class="container">
        <h2 class="main__title--products">Cadastre o seu produto</h2>
        <form action="<?= $BASE_URL ?>helpers/process_db_cadastro_produtos.php" method="POST" enctype="multipart/form-data" class="form_products">
            <input type="hidden" name="type" value="create">
            <div class="form-group">
                <label for="nomeproduto">Nome do Produto:</label>
                <input type="text" class="form-control" id="nomeproduto" name="nomeproduto" required>
            </div>
            <div class="form-group">
                <label for="precoproduto">Preço:</label>
                <input type="text" class="form-control" id="precoproduto" name="precoproduto" required>
            </div>
            <div class="form-group">
                <label for="estoque">Quantidade Disponível:</label>
                <input type="text" class="form-control" id="estoque" name="estoque" required>
            </div>
            <div class="form-group">
                <label for="descricaoproduto">Descrição do Produto:</label>
                <input type="text" class="form-control" id="descricaoproduto" name="descricaoproduto" required>
            </div>
            <div class="form-group">
                <label for="imagemproduto">Arquivo de imagem:</label>
                <input type="file" class="form-control" id="imagemproduto" name="imagemproduto" required>
            </div>
                <button type="submit" class="w-100 btn btn-primary">Cadastrar</button>
        </form>
    </div>
<?php
    include_once("templates/footer.php")
?>