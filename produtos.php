<?php
    include_once("templates/header.php")

?>  

    <div class="container">
        <h1 class="product-title">PRODUTOS</h1>
        <div class="row justify-content-center product-section">
            <div class="col-2 filter">
                <h1>FILTROS</h1>
            </div>
            <div class="col-10 products">
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
        </div>       
    </div>
