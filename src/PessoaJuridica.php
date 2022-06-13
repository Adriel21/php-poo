<?php
require_once "Cliente.php";
//Final class indica que a classe não permite herança
/*final*/ class PessoaJuridica extends Cliente {
    private string $cnpj;
    private int $anoFundacao = 2001;
    private string $nome;


    public function __construct() 
    {
        $this->setSituacao("verificar");
    }

    public function exibirDados(){
        echo "<h3>".$this->getNome()."</h3>";
        echo "<p>Ano de fundação: ".$this->anoFundacao."</p>";
        echo "<p>CNPJ: ".$this->cnpj."</p>";
        echo "<p>Situação: ".$this->getSituacao()."</p>";
    }


    public function getCnpj(): string
    {
        return $this->cnpj;
    }

    public function setCnpj(string $cnpj)
    {
        $this->cnpj = $cnpj;
    }

    public function getAnoFundacao(): int
    {
        return $this->anoFundacao;
    }

    public function setAnoFundacao(int $anoFundacao)
    {
        $this->anoFundacao = $anoFundacao;
    }

    public function getNome(): string
    {
        return $this->nome;
    }


    public function setNome(string $nome)
    {
        $this->nome = "Empresa: ".$nome;
    }
}

