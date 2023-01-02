<?php
    include_once("templates/header.php");
    include_once("helpers/url.php");

    if(empty($_SESSION["Status"]) || $_SESSION["Status"] != 1 ) {
        header("Location:index.php");
    }
?>

    <div class="container-fluid adm-section">
        <h1>Area Administrativa</h1>
        <div class="adm-add">
            <a href="<?=$BASE_URL?>cadastro-produtos.php">Adicionar Produto</a>
        </div>
        <div class="adm-edit">
            <a href="<?=$BASE_URL?>editar-lista-produtos.php">Alterar Produto</a>
        </div>
        <div class="adm-delete">
            <a href="">Excluir Produto</a>
        </div>
        <div class="adm-close">
            <a href="">Sair da Área Administrativa</a>
        </div>

    </div>

<?php
    include_once("templates/footer.php");
?>