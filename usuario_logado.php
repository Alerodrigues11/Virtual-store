<?php
    session_start();
    include_once("helpers/url.php");

    // The page below is to validate the login and to implement secure methods, like the IF below that avoids attempts to access the system without a register.

    if(!isset($_SESSION["email"]) == true and !isset($_SESSION["pass"]) == true)
    {  
        header("Location: ". $BASE_URL . "login.php");
        unset($_SESSION["email"]);
        unset($_SESSION["pass"]);
    } else 
    {
        $logado = $_SESSION["email"];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USUARIO LOGADO</title>
</head>
<body>
    <H1>VOCE ESTÁ LOGADO <?= $logado ?></H1>
</body>
</html>