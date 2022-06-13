<?php
require_once "Tecnico.php";
class Didatico extends Tecnico {
    private string $disciplina;
    private array $nivel = ["básico", "médio", "superior"];

    public function getDisciplina(): string
    {
        return $this->disciplina;
    }

    public function setDisciplina(string $disciplina)
    {
        $this->disciplina = $disciplina;
    }

    public function getNivel(): array
    {
        return $this->nivel;
    }

    public function setNivel(array $nivel)
    {
        $this->nivel = $nivel;
    }
}