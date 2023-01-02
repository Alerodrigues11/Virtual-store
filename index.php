<?php
    include_once("templates/header.php");
    include_once("helpers/conn-banco-de-dados.php");

    $busca = "SELECT * FROM produtos ORDER BY id DESC LIMIT 4";
    $conexao = $conn_clients->prepare($query);
    $conexao->execute();
    $arrCarousel = $conexao->fetchAll();

?>
    <section>
    <?php if(count($arrCarousel) > 0) { ?>
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <?php $active = "active"; ?>
                <?php $y = 0; ?>
                <?php foreach($arrCarousel as $row): ?>
                    <li data-bs-target="#myCarousel" data-bs-slide-to="<?= $y ?>" class="<?= $active ?>" aria-label="Slide <?= $y++ ?>"></li>
                    <?php $active = ""; ?>
                <?php endforeach ?>

            </ol>
            <div class="carousel-inner">

                <?php $active = "active"; ?>
                <?php foreach($arrCarousel as $row): ?>
                    <div class="carousel-item <?= $active ?>">
                        <div>
                            <img class="overlay-image" src="<?= $BASE_URL?>/upload/<?= $row["imagem"]?>" alt="#">
                        </div>
                        <div class="container carousel__description">
                            <h1>EXAMPLE HEADLINE</h1>
                            <p>2</p>
                            <a href="#" class="btn btn-lg btn-primary">BUY NOW</a>
                        </div>
                    </div>
                    <?php $active = ""; ?>
                    <?php endforeach ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <?php } ?>

    </section>

<?php
    include_once("templates/footer.php");
?>
