<?php

    $env = parse_ini_file('.env');

    $host = $env['DB_HOST'];
    $dbname = $env['DB'];
    $user = $env['DB_USERNAME'];
    $pass = $env['DB_PASSWORD'];

    try {

        $conn_clients = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

        // Error mode on
        $conn_clients->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e) {
        // Connection error
        $error = $e->getMessage();
        echo "Erro: $error";
    }