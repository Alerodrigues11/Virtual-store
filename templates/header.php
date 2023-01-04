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

    <link rel="stylesheet" href="<?=$BASE_URL?>bootstrap/bootstrap.min.css">
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
    
</head>

<body>

    <!-- Header-->
        <header class="container-fluid">
            <nav class="navbar navbar-expand-lg bg-dark header">
                    <a class="navbar-brand" href="#"><img class="logo" src="<?=$BASE_URL?>img-logo/logo.png" alt="Logo"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbar-links">
                        <div class="navbar-nav ms-auto">
                            <a class="nav-item nav-link" id="navbar-links" aria-current="page" href="<?=$BASE_URL?>index.php">HOME</a>
                            <a class="nav-item nav-link" id="navbar-links" href="<?=$BASE_URL?>produtos.php">PRODUTOS</a>
                            <a class="nav-item nav-link" id="navbar-links" href="<?=$BASE_URL?>form-contato.php">CONTATO E LOCALIZAÇÃO</a>
                        </div>
                        <?php if(empty($_SESSION["Status"]) && empty($_SESSION["email"]) && empty($_SESSION["pass"])) { ?>
            
                        <div class="navbar-nav ms-auto">
                            <a class="nav-item nav-link header__login" href="login.php">LOGIN</a>
                            <a class="nav-item nav-link header__register" href="cadastro-clientes.php">SING UP</a>
                        </div>

                        <?php } else if($_SESSION["Status"] == 0) { ?>
                            <div class="navbar-nav ms-auto">
                                <a class="nav-item nav-link" href="#"><?= $_SESSION["email"]?></a>
                                <a class="nav-item nav-link header__close" href="<?=$BASE_URL?>sair.php">Sair</a>
                            </div>
                            <?php } else { ?>
                            <div class="navbar-nav ms-auto">
                                <a class="nav-item nav-link header__adm" href="<?=$BASE_URL?>adm-pagina.php">Administrador</a>
                                <a class="nav-item nav-link header__close" href="<?=$BASE_URL?>sair.php">Sair</a>
                            </div>
                            <?php } ?>
                    </div>
            </nav>
        </header>