<?php

    include_once("helpers/url.php");

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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" />

    <link rel="stylesheet" href="<?=$BASE_URL?>bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="<?=$BASE_URL?>CSS/quem_somos.css">
    <link rel="stylesheet" href="<?=$BASE_URL?>CSS/header.css">
    <link rel="stylesheet" href="<?=$BASE_URL?>CSS/footer.css">
    <link rel="stylesheet" href="<?=$BASE_URL?>CSS/contato.css">
    <link rel="stylesheet" href="<?=$BASE_URL?>CSS/cadastro_clientes.css">
    <link rel="stylesheet" href="<?=$BASE_URL?>CSS/cadastro_produtos.css">
    <link rel="stylesheet" href="<?=$BASE_URL?>CSS/login_page.css">
    
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
                    <a class="nav-link" aria-current="page" href="<?=$BASE_URL?>index.php">Home</a>
                    <a class="nav-link" href="" target="_blank">Produtos</a>
                    <a class="nav-link" href="<?=$BASE_URL?>form_contato.php">Contato e Localização</a>
                    <a class="nav-link" href="<?=$BASE_URL?>cadastro_produtos.php"">Cadastro de Produtos</a>
                </div>

                <div class="register__home-page">
                    <div class="register">
                        <a href="login.php">Login</a>
                        <a href="cadastro_clientes.php">Sign up</a>
                    </div>
                </div>
            </div>

    </nav>