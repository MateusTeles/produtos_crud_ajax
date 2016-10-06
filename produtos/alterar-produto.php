<?php
// Formulário gerado dinâmicamento por AJAX
include_once 'includes/conexao.php';
include_once 'classes/ProdutoDAO.php';
include_once 'classes/Produto.php';
$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
if(isset($post['id'])) {
    $id = mysqli_real_escape_string($conexao, $post['id']);
    $produtoDAO = new ProdutoDAO($conexao);
    $produto = $produtoDAO->buscaProdutoId($id);


}
?>

<form class="form-altera" method="post" action="alterar.php">
    <table class="table table-responsive">
        <input name="id" type="hidden" value="<?= $produto['id'] ?>">
        <tr>
            <td>Nome:</td>
            <td><input class="form-control" type="text" name="nome" value="<?=$produto['nome']?>"></td>
        </tr>
        <tr>
            <td>Preço:</td>
            <td><input class="form-control" type="number" name="preco" value="<?= $produto['preco'] ?>"></td>
        </tr>
        <tr>
            <td>Quantidade:</td>
            <td><input type="number" class="form-control" name="quantidade" value="<?= $produto['quantidade'] ?>"></td>
        </tr>
        <tr>
            <td>Descrição:</td>
            <td><textarea name="descricao" class="form-control"><?= $produto['descricao'] ?></textarea></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" class="btn btn-primary" value="Alterar"></td>
            <td><button class="btn btn-danger">Cancelar</button></td>
        </tr>
    </table>
</form>

<script>
    $(document).ready(function() {
        // Requisição AJAX para alteração do produto em questão
        $('.form-altera').submit(function(e) {
            e.preventDefault();
            var url = $(this).attr('action');
            var dados = $(this).serialize();
            $.post(url, dados, function(data) {
                // esconde o form após atualizar
                $('.form-altera').hide('slow');
            })

        });
    });
</script>
