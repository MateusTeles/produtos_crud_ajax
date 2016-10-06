<?php
include_once './includes/conexao.php';
include_once './classes/ProdutoDAO.php';

$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

if(isset($post['id'])) {
    $id = $post['id'];
    echo $id;
    $produtoDAO = new ProdutoDAO($conexao);
    $produtoDAO->removerProduto($id);
}