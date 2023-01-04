<?php
    include_once("templates/header.php");
    include_once("helpers/conn-banco-de-dados.php");

    $busca = "SELECT * FROM produtos ORDER BY id DESC LIMIT 4";
    $conexao = $conn_clients->prepare($busca);
    $conexao->execute();
    $arrCarousel = $conexao->fetchAll();

?>
    <div class="main__page--section">
    <section class="main__carousel">
        <h1 class="main__carousel--title">NOSSOS PRINCIPAIS PRODUTOS</h1>
    <?php if(count($arrCarousel) > 0) { ?>
        <div class="row mt-3">
            <div class="owl-carousel owl-theme">
                <?php foreach($arrCarousel as $row): ?>
                <div class="item mb-4">
                    <div class="card border-1 shadow">
                        <img src="<?= $BASE_URL?>/upload/<?= $row["imagem"]?>" alt="#" class="card-img-top img__main">
                        <div class="card-body">
                            <h4><?= $row["nome"]?></h4>
                            <p>R$ <?= $row["preco"]?></p>
                            <button class="btn btn-outline-success">Compre Agora</button>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>

        <?php } ?>
    </section>

    <section class="about__section">
        <div class="about">
            <h1>QUEM SOMOS</h1>
            <div class="about__general">
                <div>
                    <h2>Missão</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam eligendi minima officia totam corporis, at reprehenderit odit vel atque a corrupti. Repellendus rerum, perferendis soluta commodi eos rem harum quia!</p>
                </div>
                <div class="about__vision">
                    <h2>Visão</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam eligendi minima officia totam corporis, at reprehenderit odit vel atque a corrupti. Repellendus rerum, perferendis soluta commodi eos rem harum quia!</p>
                </div>
                <div>
                    <h2>Valores</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam eligendi minima officia totam corporis, at reprehenderit odit vel atque a corrupti. Repellendus rerum, perferendis soluta commodi eos rem harum quia!</p>
                </div>
            </div>
        </div>
    </section>
    </div>

<?php
    include_once("templates/footer.php");
?>
