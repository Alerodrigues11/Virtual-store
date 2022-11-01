<!DOCTYPE html>
<html lang="pt-br">
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Produtos</title>
    
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;600&display=swap" rel="stylesheet">
    
        <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="../CSS/produtos-page.css">
        <link rel="stylesheet" href="../CSS/produtos-homepage.css">
        <link rel="stylesheet" href="../CSS/homepage-carousel-quemsomos.css">
        <link rel="stylesheet" href="../CSS/header.css">
        <link rel="stylesheet" href="../CSS/footer.css">
        <link rel="stylesheet" href="../CSS/contato.css">
        
    </head>
    
    <body>
        <header>
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

                        <div class="general__home-page">
                            <div class="register">
                                <a href="#">Login</a>
                                <a href="#">Sign up</a>
                            </div>
                        </div>
                    </div>
            </nav>
        </header>
    
        <main class="search__area">
            <div class="products__search">      
                <div id="divSearch">
                    <img src="../img/lupa.png" alt="Search..."/>
                    <input type="text" id="txtSearch" placeholder="Search..."/>
                </div>
            
            <p class="category">CATEGORIAS</p>
            </div>

            <div class="main">
                <section class="main__filtro">
                    <button class="filtro">Tudo</button>
                    <button class="filtro">Celular</button>
                    <button class="filtro">Camera</button>
                    <button class="filtro">Relógio</button>
                    <button class="filtro">Óculos</button>
                </section>
                
                <section class="main__produtos row justify-content-center">
                    <?php for($i = 0; $i <= 3; $i++) { ?>
                        <div class="col-2 container__products--all"><img class="produto" src="../img/oculos1.jpg" alt="#"></div>
                        <div class="col-2 container__products--all"><img class="produto" src="../img/oculos1.jpg" alt="#"></div>
                        <div class="col-2 container__products--all"><img class="produto" src="../img/relogio1.jpg" alt="#"></div>
                        <div class="col-2 container__products--all"><img class="produto" src="../img/relogio2.jpg" alt="#"></div>
                    <?php } ?>

                </section>
            </div>

        <script src="/bootstrap/bootstrap.min.js"></script>
    </body>
    
    </html>