<?php
    include_once("templates/header.php");


    $filtro = "SELECT DISTINCT categoria FROM produtos";
    $arr = $conn_clients->prepare($filtro);
    $arr->execute();

    $categorias = $arr->fetchAll();

?>
    <div>
        <h1 class="product-title">PRODUTOS</h1>
        <div class="row">
            <div class="col-sm-2">
                <ul class="product-filter">
                    <?php if(isset($categorias)): ?>
                    <li><a href="<?= $BASE_URL?>produtos.php">Todos</a></li>
                    <?php foreach($categorias as $categoria): ?>
                        <li><a href="<?= $BASE_URL?>produtos.php?categoria=<?= $categoria["categoria"]?>"><?= $categoria["categoria"]?></a></li>
                    <?php endforeach ?>
                    <?php endif ?>
                </ul>
            </div>

            <!-- Filtro -->

            <?php if(isset($_GET["categoria"]))
                {
                    $categoria = $_GET["categoria"];
                    $query = "SELECT * FROM produtos WHERE categoria = :categoria";
                    $stmt = $conn_clients->prepare($query);
                    $stmt->bindParam(":categoria", $categoria);
                    $stmt->execute();
                    $produtosCategoria = $stmt->fetchAll();
            ?>
            <div class="col-sm-10 products">
            <?php foreach($produtosCategoria as $produtoCategoria): ?>
                <div class="individual-products">
                    <div class="img-products">
                        <img src="<?= $BASE_URL?>/upload/<?= $produtoCategoria["imagem"]?>" alt="Imagem do produto">
                    </div>
                    <h3><?= $produtoCategoria["nome"] ?></h3>
                    <p>Preço: <?= $produtoCategoria["preco"] ?></p>
                    <button type="button" class="btn btn-outline-success">Adicione ao Carrinho</button>
                </div>
            <?php endforeach ?>
            </div>
            <?php } else { ?>
                <div class="col-sm-10 products">
                <?php foreach($produtos as $produto): ?>
                    <div class="individual-products">
                        <div class="img-products">
                            <img src="<?= $BASE_URL?>/upload/<?= $produto["imagem"]?>" alt="Imagem do produto">
                        </div>
                        <h3><?= $produto["nome"] ?></h3>
                        <p>Preço: <?= $produto["preco"] ?></p>
                        <button type="button" class="btn btn-outline-success">Adicione ao Carrinho</button>
                    </div>
                <?php endforeach ?>
                </div>
            <?php } ?>
        </div>
    </div>

<?php
    include_once("templates/footer.php");
?>

