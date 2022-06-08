<?php 

class Cliente 
{
    // propriedades (ou atributos)
    public string $nome;
    public string $email;
    public string $senha = "";
    public array $telefones;


    public function exibirDados(){
        echo "<h3>$this->nome</h3>";
        echo "<ul>";
        echo "<li> $this->email</li>";
        echo "<li>".implode(', ', $this->telefones)."</li>";
        echo "</ul>";                      // se estamos dentro da classe, utilizamos o this, fora da classe é através do nome do objeto
    }
}