<?php
require_once "Livro.php";

abstract class Tecnico extends Livro {
    private array $formato = ["digital", "fisico"];

    
    public function getFormato(): array
    {
        return $this->formato;
    }

    
    public function setFormato(array $formato)
    {
        $this->formato = $formato;

        return $this;
    }
}
