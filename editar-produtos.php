<?php
    include_once("helpers/url.php");
    include_once("templates/header.php");
    if(empty($_SESSION["Status"]) || $_SESSION["Status"] != 1 ) {
        header("Location:index.php");
    }
?>  
    <div class="container">
        <h2 class="main__title--products">Edite o seu produto</h2>
        <form action="<?= $BASE_URL ?>helpers/process_db_cadastro_produtos.php" method="POST" enctype="multipart/form-data" class="form_products">
            <input type="hidden" name="type" value="edit">
            <input type="hidden" name="id" value="<?=$produto["id"]?>">
            <div class="form-group">
                <label for="nomeproduto">Nome do Produto:</label>
                <input type="text" class="form-control" id="nomeproduto" name="nomeproduto" value="<?= $produto["nome"] ?>">
            </div>
            <div class="form-group">
                <label for="precoproduto">Preço:</label>
                <input type="text" class="form-control" id="precoproduto" name="precoproduto" value="<?= $produto["preco"] ?>">
            </div>
            <div class="form-group">
                <label for="estoque">Quantidade Disponível:</label>
                <input type="text" class="form-control" id="estoque" name="estoque" value="<?= $produto["estoque"] ?>">
            </div>
            <div class="form-group">
                <label for="descricaoproduto">Descrição do Produto:</label>
                <input type="text" class="form-control" id="descricaoproduto" name="descricaoproduto" value="<?= $produto["descricao"] ?>">
            </div>
            <div class="form-group">
                <label for="imagemproduto">Arquivo de imagem:</label>
                <input type="file" class="form-control" id="imagemproduto" name="imagemproduto">
                <img class="img-edit-products" src="<?= $BASE_URL?>/upload/<?= $produto["imagem"]?>" alt="Imagem do produto">
            </div>
                <button type="submit" class="w-100 btn btn-primary">Editar</button>
        </form>
    </div>
<?php
    include_once("templates/footer.php")
?>