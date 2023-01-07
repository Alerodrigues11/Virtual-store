<?php

    include_once("helpers/url.php");
    include_once("helpers/process-db-cadastro-clientes.php");
    include_once("helpers/process-db-cadastro-produtos.php");

    // limpar a mensagem
    if(isset($_SESSION["msg"])) {
        $printMsg = $_SESSION["msg"];
        $_SESSION["msg"] = '';
    }

?>

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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="<?=$BASE_URL?>CSS/body.css">
    <link rel="stylesheet" href="<?=$BASE_URL?>CSS/index-carousel.css">
    <link rel="stylesheet" href="<?=$BASE_URL?>CSS/quem-somos.css">
    <link rel="stylesheet" href="<?=$BASE_URL?>CSS/header.css">
    <link rel="stylesheet" href="<?=$BASE_URL?>CSS/footer.css">
    <link rel="stylesheet" href="<?=$BASE_URL?>CSS/login.css">
    <link rel="stylesheet" href="<?=$BASE_URL?>CSS/contato.css">
    <link rel="stylesheet" href="<?=$BASE_URL?>CSS/cadastro-clientes.css">
    <link rel="stylesheet" href="<?=$BASE_URL?>CSS/cadastro-produtos.css">
    <link rel="stylesheet" href="<?=$BASE_URL?>CSS/produtos.css">
    <link rel="stylesheet" href="<?=$BASE_URL?>CSS/adm-pagina.css">
    <link rel="stylesheet" href="<?=$BASE_URL?>CSS/editar-lista-produtos.css">
    <link rel="stylesheet" href="<?=$BASE_URL?>CSS/editar-produtos.css">
    
</head>

<body>

    <!-- Header-->
        <header class="container-fluid header">
            <nav class="navbar navbar-expand-lg bg-dark header__content">
                    <span class="navbar-brand mb-0" href="#">DEMOWEBSITE</span>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-links" aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbar-links">
                        <div class="navbar-nav me-auto ms-auto mb-2 mb-lg-0">
                            <a class="nav-item nav-link header__nav-item" aria-current="page" href="<?=$BASE_URL?>index.php">HOME</a>
                            <a class="nav-item nav-link header__nav-item" href="<?=$BASE_URL?>produtos.php">PRODUTOS</a>
                            <a class="nav-item nav-link header__nav-item"href="<?=$BASE_URL?>form-contato.php">CONTATO E LOCALIZAÇÃO</a>
                        </div>
                        <?php if(empty($_SESSION["Status"]) && empty($_SESSION["email"]) && empty($_SESSION["pass"])) { ?>
                        <div class="d-flex header__login">
                            <a class="nav-item nav-link header__login__btn" href="<?=$BASE_URL?>login.php">LOGIN</a>
                            <a class="nav-item nav-link header__register__btn" href="<?=$BASE_URL?>cadastro-clientes.php">SING UP</a>
                        </div>

                        <?php } else if($_SESSION["Status"] == 0) { ?>
                        <div class="d-flex header__login">
                            <a class="nav-item nav-link header__login__user" href="#"><?= $_SESSION["email"]?></a>
                            <a class="nav-item nav-link header__login__close" href="<?=$BASE_URL?>sair.php">Sair</a>
                        </div>
                            <?php } else { ?>
                        <div class="d-flex header__login">
                            <a class="nav-item nav-link header__login__adm" href="<?=$BASE_URL?>adm-pagina.php">Administrador</a>
                            <a class="nav-item nav-link header__login__close" href="<?=$BASE_URL?>sair.php">Sair</a>
                        </div>
                    <?php } ?>
                    </div>
            </nav>
        </header>