<?php

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $assuntoFormulario = "Formulário de Contato" . $_POST["assunto"];
    $mensagem = $_POST["mensagem"];
    $from = "contato@ludostore.com";

    $headers = "MIME-Version: 1,1\n";
    $headers .= "Content-type:text/html; charset=utf-8\n";
    $headers .= "From: Meu Site <$from\n";
    $headers .= "Return-Path: $from\n";
    $headers .= "Reply-to: $email\n";

    if(mail($email, $assuntoFormulario, $mensagem, $headers, $from)) {
        echo "email foi enviado com sucesso";
    } else {
        echo "email nao foi enviado";
    }
