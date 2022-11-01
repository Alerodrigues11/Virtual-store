<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LudoStore</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;600&family=Yeseva+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/produtos-page.css">
    <link rel="stylesheet" href="../CSS/produtos-homepage.css">
    <link rel="stylesheet" href="../CSS/homepage-carousel-quemsomos.css">
    <link rel="stylesheet" href="../CSS/header.css">
    <link rel="stylesheet" href="../CSS/footer.css">
    <link rel="stylesheet" href="../CSS/contato.css">
    
</head>

<body>

    <!-- Home Page -->
    
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container container__navbar">
            <div class="navbar-collapse" id="navbarNavAltMarkup">
                <div>
                    <img src="#" alt="#">
                </div>

                <div class="navbar-nav">
                    <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    <a class="nav-link" href="produtos.php" target="_blank">Produtos</a>
                    <a class="nav-link" href="contato.php">Contato e Localização</a>
                    <a class="nav-link" href="contato.php">Sugestões</a>
                </div>

                <div class="register__home-page">
                    <div class="register">
                        <a href="#">Login</a>
                        <a href="#">Sign up</a>
                    </div>
                </div>
            </div>

    </nav>

    <main>
        <div class="container container-carousel">
            <div id="mainSlider" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#mainSlider" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#mainSlider" data-bs-slide-to="1"></li>
                    <li data-bs-target="#mainSlider" data-bs-slide-to="2"></li>
                    <li data-bs-target="#mainSlider" data-bs-slide-to="3"></li>
                    <li data-bs-target="#mainSlider" data-bs-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../img/produto1.jpg" class="d-block w-100" alt="#">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Headset Gamer</h2>
                            <p></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../img/produto2.jpg" class="d-block w-100" alt="#">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Computador Gamer</h2>
                            <p></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../img/produto3.jpg" class="d-block w-100" alt="#">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Kit Gamer</h2>
                            <p></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../img/produto4.jpg" class="d-block w-100" alt="#">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Mousepad Extra Large</h2>
                            <p></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../img/produto1.jpg" class="d-block w-100" alt="#">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Monitor 24' 144hz</h2>
                            <p></p>
                        </div>
                    </div>
                </div>

                <a href="#mainSlider" class="carousel-control-prev" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    
                </a>
                <a href="#mainSlider" class="carousel-control-next" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    
                </a>

            </div>
        </div>

        <div class="carousel__product--list">
            <button class="arrow-left control" arial-label="Previous image">&#11164</button>
            <button class="arrow-right control" arial-label="Next image">&#11166</button>
            <div class="gallery-wrapper">
                <div class="gallery">
                    <img src="../img/250x250.png" alt="#" class="product--carousel current__product--carousel">
                    <img src="../img/250x250.png" alt="#" class="product--carousel current__product--carousel">
                    <img src="../img/250x250.png" alt="#" class="product--carousel current__product--carousel">
                    <img src="../img/250x250.png" alt="#" class="product--carousel current__product--carousel">
                    <img src="../img/250x250.png" alt="#" class="product--carousel current__product--carousel">
                    <img src="../img/250x250.png" alt="#" class="product--carousel current__product--carousel">
                    <img src="../img/250x250.png" alt="#" class="product--carousel current__product--carousel">
                    <img src="../img/250x250.png" alt="#" class="product--carousel current__product--carousel">
                    <img src="../img/250x250.png" alt="#" class="product--carousel current__product--carousel">
                    <img src="../img/250x250.png" alt="#" class="product--carousel current__product--carousel">
                    <img src="../img/250x250.png" alt="#" class="product--carousel current__product--carousel">
                    <img src="../img/250x250.png" alt="#" class="product--carousel current__product--carousel">
                    <img src="../img/250x250.png" alt="#" class="product--carousel current__product--carousel">
                    <img src="../img/250x250.png" alt="#" class="product--carousel current__product--carousel">
                    <img src="../img/250x250.png" alt="#" class="product--carousel current__product--carousel">
                </div>
            </div>
        </div>
    </main>

    <section class="container container__about">
            <h1 class="container__about--title">Quem Somos</h1>
            <div class="row justify-content-center">
                <div class="col-3 description__card">
                    <div class="description__card--specific">
                        <h1>Tecnologia</h1>
                        <P>DESCRIPTION</P>
                    </div>
                </div>
    
                <div class="col-3 description__card">
                    <div class="description__card--specific">
                        <h1>Mercado</h1>
                        <P>DESCRIPTION</P>
                    </div>
                </div>
    
                <div class="col-3 description__card">
                    <div class="description__card--specific">
                        <h1>Futuro</h1>
                        <P>DESCRIPTION</P>
                    </div>
                </div>   
            </div>   
    </section>

    <footer>
        
    </footer>
    
    <script src="../bootstrap/bootstrap.min.js"></script>
</body>

</html>