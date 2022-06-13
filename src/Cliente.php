<?php
/* Classes abstratas NÃO PODEM SER INSTANCIADAS.
Ou seja, não é possível criar um objeto/variável
a partir desta classe. */
abstract class Cliente {
    private string $nome;
    private string $email;
    private string $senha;
    
    private string $situacao = "a definir";
    
    /* Métodos getters e setters */
    public function getNome():string {
        return $this->nome;
    }

    public function setNome(string $nome){
        $this->nome = $nome;
    }

    public function getEmail():string {
        return $this->email;
    }

    public function setEmail(string $email){
        $this->email = $email;
    }

    public function getSenha():string {
        return $this->senha;
    }

    public function setSenha(string $senha){
        $this->senha = password_hash($senha, PASSWORD_DEFAULT);
    }

 
    protected function getSituacao(): string
    {
        return $this->situacao;
    }

//  public: nenhuma restrição
/*todos acessam todos)

private: restrição total
(só a classe conhece os recursos dela)

protected: restrição parcial
(Recursos acessíveis pela própria classe e pelas subclasses que a herdam)*/

    protected function setSituacao(string $situacao)
    {
        $this->situacao = $situacao;

        return $this;
    }
}

 