<?php
//Criar uma classe de Produto
class Produto
{
    public $nome_produto;
    public $preco;
    public $qtd_estoque;
    
   

    public function __construct(string  $nome_produto,  $preco , $qtd_estoque, )
    {
        {   $this->nome_produto = $nome_produto;
            $this->preco = $preco;
            $this->qtd_estoque = $qtd_estoque;
         
        }
    }

    public function getNome_produto(): string
    {
        return $this->nome_produto;
    }

    public function getPreco()
    {
        return $this->preco;
    }
    public function getQtd_estoque()
    {
        return $this->qtd_estoque;
    }
    
    public function adicionaProduto($addProduto)
    {
        return $this->qtd_estoque += $addProduto;
    }
    public function removeProduto($addProduto) {
        if ($addProduto <= $this->qtd_estoque) {
            $this->qtd_estoque -= $addProduto;
        } else {
            echo "Não há quantidade em estoque.\n";
        }
    }

    public function calculaValorTotal()
    {
        return $this->preco * $this-> qtd_estoque;
    }

    
}



