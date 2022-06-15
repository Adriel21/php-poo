<?php
abstract class Livro {
    private string $titulo;
    private string $autor;
    private int $paginas = 0;



     public function formataTitulo(){
        $stra = "<strong>".$this->getTitulo()."</strong>";
        $stra = mb_strtoupper($stra);
        return $stra;
    } 

    // public function formataTitulo($titulo){
    //     echo "<strong>".$titulo()."</strong>";
    // }

    public function getTitulo(): string    
    {
        return $this->titulo;
    }
    
    public function setTitulo(string $titulo)
    {
        $this->titulo = $titulo;
    }

    public function getAutor(): string
    {
        return $this->autor;
    }

    public function setAutor(string $autor)
    {
        $this->autor = $autor;
    }

    public function getPaginas(): int
    {
        return $this->paginas;
    }

    public function setPaginas(int $paginas)
    {
        $this->paginas = $paginas;
    }
}