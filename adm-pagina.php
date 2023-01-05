<?php
    include_once("templates/header.php");
    include_once("helpers/url.php");

    if(empty($_SESSION["Status"]) || $_SESSION["Status"] != 1 ) {
        header("Location:index.php");
    }
?>

    <div class="container-fluid adm__section">
        <h1>Área Administrativa</h1>
        <div class="adm__section--add">
            <a href="<?=$BASE_URL?>cadastro-produtos.php">Adicionar Produto</a>
        </div>
        <div class="adm__section--edit">
            <a href="<?=$BASE_URL?>editar-lista-produtos.php">Editar / Excluir Produto</a>
        </div>
    </div>

<?php
    include_once("templates/footer.php");
?>