<?php
class CarrinhoDeCompras {
    private $produtos = [];

    public function adicionaProduto($produto) {
        $this->produtos[] = $produto;
    }

    public function removeProduto($produto) {
        $key = array_search($produto, $this->produtos);
        if ($key !== false) {
            unset($this->produtos[$key]);
        }
    }

    public function calculaDesconto($desconto) {
        $indice = 0;
        foreach ($this->produtos as $produto) {
            $indice += $produto->getPreco() * $desconto;
        }
        return $indice;
    }

    public function calculaFrete() {
        $Total = $this->calculaTotal();
        if ($Total > 100) {
            return 0;
        } else {
            return 9.99;
        }
    }

    public function calculaTotal() {
        $valor = 0;
        foreach ($this->produtos as $produto) {
            $valor += $produto->getPreco();
        }
        return $valor;
    }

    public function listaProdutos() {
        return $this->produtos;
    }
}

class Produto {
    private $nome_produto;
    private $preco;

    public function __construct($nome_produto, $preco) {
        $this->nome_produto = $nome_produto;
        $this->preco = $preco;
    }

    public function getNome() {
        return $this->nome_produto;
    }

    public function getPreco() {
        return $this->preco;
    }
}

$novocarrinho = new CarrinhoDeCompras();
$produtoA = new Produto("britadeira", 18000.00);
$produtoB = new Produto("Furadeira industrial", 8000.00);
$novocarrinho->adicionaProduto($produtoA);
$novocarrinho->adicionaProduto($produtoB);
$carrinho->removerProduto($produtoA);
$total = $novocarrinho->calculaTotal();
echo "Total da Compra: R$ " . $total ;
$indice = $novocarrinho->calculaDesconto(0.2);
echo "Desconto: R$ " . $indice ;
$frete = $novocarrinho->calculaFrete();
echo "Frete: R$ " . $frete ;
$produtosNoCarrinho = $novocarrinho->listaProdutos();
echo "Carrinho: ";
foreach ($produtosNoCarrinho as $produto) {
    echo "Produto: " . $produto->getNome() . ", Preço: R$ " . $produto->getPreco()  ;
}
?>