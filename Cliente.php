<?php
//Criar uma classe de Cliente
class Cliente
{
    public $nome;
    public $celular;
    public $email;
    public $endereco;
    private float $totalCompras;
   

    public function __construct(string $nome, string $celular ,string $email, string $endereco )
    {
        {   $this->nome = $nome;
            $this->celular = $celular;
            $this->email = $email;
            $this->endereco = $endereco;
            $this->totalCompras = 0;
        }
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome):void 
    {

        $nome = explode(" ", $nome, 2);

        if ($nome[0] === "") {
            $this->nome = "Nome inválido";
        } else {
            $this->nome = $nome[0];
        }
    }
    public function getCelular(): string
    {
        return $this->celular;
    }

    public function setcelular(string $celular):void 
    {

        $this->celular;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email):void 
    {

        $this->email;
    }

    public function getEndereco(): string
    {
        return $this->endereco;
    }
    public function setEndereco(string $endereco):void 
    {

        $this->endereco;
    }
    public function getTotalCompras(): float {
        return $this->totalCompras;
    }

    public function adicionarCompra($valor) {
        $this->totalCompras += $valor;
    }
}





