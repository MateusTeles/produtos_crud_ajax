<?php
class ProdutoDAO {
    // atributo que inicializará a conexão
    private $connection;

    // Inicializa o objeto de acesso ao banco com a conexão
    public function __construct($connection) {
        $this->connection = $connection;
    }

    // método para inserção de produtos
    public function inserirProduto(Produto $produto) {
        // String da query SQL
        $query = "insert into produtos (nome, quantidade, descricao, preco) 
                    values ('{$produto->getNome()}', {$produto->getQuantidade()}, 
                    '{$produto->getDescricao()}', {$produto->getPreco()})";
        return mysqli_query($this->connection, $query);
    }

    // método para listar os produtos
    public function listarProdutos() {
        $produtos = array();
        $result_set = mysqli_query($this->connection, "select * from produtos");
        while($produtoAtual = mysqli_fetch_assoc($result_set)) {
            $produto = new Produto();
            $produto->setId($produtoAtual['id']);
            $produto->setNome($produtoAtual['nome']);
            $produto->setPreco($produtoAtual['preco']);
            $produto->setQuantidade($produtoAtual['quantidade']);
            $produto->setDescricao($produtoAtual['descricao']);
            array_push($produtos, $produto);
        }
        return $produtos;
    }
    
    // método para remover um produto
    public function removerProduto($id) {
        $query = "delete from produtos where id = " . $id;
        return mysqli_query($this->connection, $query);
    }
    
    // método para buscar produto por id
    public function buscaProdutoId($id) {
        $query = "select * from produtos where id = " . $id;
        $result = mysqli_query($this->connection, $query);
        return mysqli_fetch_assoc($result);
    }

    // método para atualizar o produto
    public function atualizarProduto(Produto $produto) {
        $query = "update produtos set nome = '{$produto->getNome()}', preco = {$produto->getPreco()}, 
                    quantidade = {$produto->getQuantidade()}, descricao = '{$produto->getDescricao()}' 
                    where id = {$produto->getId()}";
        return mysqli_query($this->connection, $query);
    }
}