<?php
include_once 'includes/header.php';
// Filtrando a variável $_POST
$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
// buscando os atributos vindos do formulário
$nome = $post['nome'];
$preco = $post['preco'];
$quantidade = $post['quantidade'];
$descricao = $post['descricao'];
// instanciando um produto para inserção
$produto = new Produto();
$produto->setNome($nome);
$produto->setPreco($preco);
$produto->setQuantidade($quantidade);
$produto->setDescricao($descricao);

$produtoDAO =  new ProdutoDAO($conexao);

// Verifica se produto foi inserido e envia mensagem pela SESSION
if($produtoDAO->inserirProduto($produto)) {
    $_SESSION['success']= "Produto {$produto->getNome()} adicionado com sucesso";
    header("Location: index.php");
}
