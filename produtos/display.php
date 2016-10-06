<?php
// gera tabela dinâmicamente por AJAX
include_once 'includes/conexao.php';
include_once 'classes/ProdutoDAO.php';
include_once 'classes/Produto.php';

$produtoDAO = new ProdutoDAO($conexao);
$produtos = $produtoDAO->listarProdutos();
?>

<table class="table table-bordered">
    <thead>
    <th>Nome</th>
    <th>Preço</th>
    <th>Quantidade</th>
    <th>Descrição</th>
    </thead>
    <?php foreach ($produtos as $produto): ?>
        <tr>
            <td><?php echo $produto->getNome(); ?></td>
            <td><?php echo $produto->getPreco(); ?></td>
            <td><?php echo $produto->getQuantidade(); ?></td>
            <td><?php echo $produto->getDescricao(); ?></td>
            <td><a class="btn btn-primary alterar" href="#" rel="<?= $produto->getId() ?>">Alterar</a></td>
            <td>
                <form action="remover-produto.php" method="post" class="remove-form">
                    <input type="hidden" name="id" value="<?= $produto->getId(); ?>">
                    <button class="btn btn-danger">Remover</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<script>
    // Gera formulário de alteração por AJAX
    $('.alterar').click(function(e) {
        e.preventDefault();
        var id = $(this).attr('rel');
        $.post('alterar-produto.php', {id: id}, function(data) {
            $('.update-form').html(data);
        });
    });

    // Remove o produto em questão de maneira dinâmica
    $(".remove-form").on('submit', function(e) {
        e.preventDefault();
        var url = $(this).attr('action');
        var dados = $(this).serialize();
        $.ajax({
            url: url,
            data: dados,
            type: 'POST',
            success: function(data) {

            }
        });
    });

</script>