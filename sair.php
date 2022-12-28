<?php
    session_start();
    include_once("helpers/url.php");

    unset($_SESSION["email"]);
    unset($_SESSION["pass"]);
    unset($_SESSION["Status"]);
    header("Location: ". $BASE_URL . "index.php");
?>