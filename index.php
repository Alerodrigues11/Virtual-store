<?php
    include_once("templates/header.php");
    include_once("helpers/conn-banco-de-dados.php");

    $busca = "SELECT * FROM produtos ORDER BY id DESC LIMIT 4";
    $conexao = $conn_clients->prepare($busca);
    $conexao->execute();
    $arrCarousel = $conexao->fetchAll();

?>
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

    <section>
        <h1>QUEM SOMOS</h1>
        <h2>Missão</h2>
        <h2>Visão</h2>
        <h2>Valores</h2>
    </section>

<?php
    include_once("templates/footer.php");
?>
