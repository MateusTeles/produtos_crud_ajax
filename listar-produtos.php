<?php include_once 'includes/header.php'; ?>
<?php
$produtoDAO = new ProdutoDAO($conexao);
$produtos = $produtoDAO->listarProdutos();
?>
<h1>Listagem de Produtos</h1>

<div class="row">

    <div class="col-sm-8 display-table">

    </div>
    
    <div class="col-sm-4 update-form">
        
    </div>
    
</div>
<script>
    $(document).ready(function() {
        // Gera a tabela de produtos em um intervalo de 0.3 segundos
        setInterval(function() {
            $.ajax({
                url: 'display.php',
                type: 'POST',
                success: function(data) {
                    $('.display-table').html(data);
                }
            });
        }, 300);
    });
</script>
<?php include_once 'includes/footer.php'; ?>
