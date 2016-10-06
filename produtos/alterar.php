<?php
include_once 'includes/conexao.php';
include_once 'classes/ProdutoDAO.php';
include_once 'classes/Produto.php';
// Filtra a variável global $_POST
$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
if(!empty($post)) {
    // atribui os valores de POST
    $id = $post['id'];
    $nome = $post['nome'];
    $preco = $post['preco'];
    $quantidade = $post['quantidade'];
    $descricao = $post['descricao'];

    // instancia produto para alteração
    $produto = new Produto();
    $produto->setId($id);
    $produto->setNome($nome);
    $produto->setPreco($preco);
    $produto->setQuantidade($quantidade);
    $produto->setDescricao($descricao);

    // instancia o DATA ACCESS OBJECT para operação de update no banco
    $produtoDAO = new ProdutoDAO($conexao);
    $produtoDAO->atualizarProduto($produto);
}