<?php

    include_once("url.php");
    include_once("conn_banco_de_dados.php");

    $filtro = "SELECT DISTINCT categoria FROM produtos";
    $arr = $conn_clients->prepare($filtro);
    $arr->execute();

    $categorias = $arr->fetchAll();

    $data = $_POST;

    if(!empty($data))
    {
        $categoria = $data["categoria"];
        header("Location: ". $BASE_URL . "../produtos.php");
        print_r($categoria);
    }