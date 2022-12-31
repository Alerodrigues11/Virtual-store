<?php
    include_once("helpers/url.php");
    include_once("templates/header.php");
?>

    <div class="container-fluid">
        <h1>LISTA DE PRODUTOS</h1>
        <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="table-th" scope="col">Imagem</th>
                        <th class="table-th" scope="col">Nome</th>
                        <th class="table-th" scope="col">Preço</th>
                        <th class="table-th" scope="col">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($produtos as $produto): ?>
                        <tr class="table-tr">
                            <td class="table-td table-td-text" scope="row"><img class="img-edit-products" src="<?= $BASE_URL?>/upload/<?= $produto["imagem"]?>" alt="Imagem do produto"></td>
                            <td class="table-td table-td-text"scope="row"><?= $produto["nome"]?></td>
                            <td class="table-td table-td-text"scope="row"><?= $produto["preco"]?></td>
                            <td class="table-td">
                                <a href="<?= $BASE_URL ?>editar-produtos.php?id=<?= $produto["id"]?>">EDITAR / </a>
                                <form action="<?= $BASE_URL ?>helpers/process_db_cadastro_produtos.php" method="POST">
                                    <input type="hidden" name="type" value="delete">
                                    <input type="hidden" name="id" value="<?=$produto["id"]?>">
                                    <button type="submit">DELETAR</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
    </div>

<?php

    include_once("templates/footer.php");
?>