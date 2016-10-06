<?php include 'includes/header.php'; ?>

    <h1>Cadastro de Produtos</h1>
    <form action="adicionar-produtos.php" method="post">
        <table class="table">
            <tr>
                <td>Nome do Produto</td>
                <td><input type="text" class="form-control" name="nome"></td>
            </tr>
            <tr>
                <td>Preço</td>
                <td><input type="number" name="preco" class="form-control"></td>
            </tr>
            <tr>
                <td>Quantidade</td>
                <td><input type="number" name="quantidade" class="form-control"></td>
            </tr>
            <tr>
                <td>Descrição</td>
                <td><textarea name="descricao" class="form-control"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button class="btn btn-primary" type="submit" value="Cadastrar">Cadastrar</button>
                </td>
            </tr>
        </table>
    </form>

<?php include 'includes/footer.php'; ?>
