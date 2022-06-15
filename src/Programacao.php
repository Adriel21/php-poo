<?php
require_once "Tecnico.php";
class Programacao extends Tecnico {
    private string $area;

    public function formataTitulo()
    {
        $str = "<em style=color:blue>".$this->getTitulo()."</em>";
        $str = mb_strtoupper($str);
        return $str;
    }
    public function getArea(): string
    {
        return $this->area;
    }

    public function setArea(string $area)
    {
        $this->area = $area;
    }
}