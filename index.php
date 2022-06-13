<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02 (correção)</title>
</head>
<body>
    <h1>Exercício 02</h1>
    <hr>
<?php
require_once "src/Tecnico.php";
$livroTecnico = new Tecnico;

$livroTecnico->setTitulo("Desenvolvimento de Sistemas");
$livroTecnico->setAutor("Fulano de Tal");
$livroTecnico->setPaginas(250);
$livroTecnico->setFormato(["digital"]);

require_once "src/Programacao.php";
$livroProgramacao = new Programacao;
$livroProgramacao->setTitulo("APIs com Node.js");
$livroProgramacao->setAutor("Beltrano dos Santos");
$livroProgramacao->setPaginas(200);
$livroProgramacao->setFormato(['físico']);
$livroProgramacao->setArea("Back-End");

require_once "src/Didatico.php";
$livroDidatico = new Didatico;
$livroDidatico->setTitulo("Matemática Aplicada");
$livroDidatico->setAutor("Mariazinha da Silva");
$livroDidatico->setPaginas(500);
$livroDidatico->setFormato(["físico"]);
$livroDidatico->setDisciplina("Matemática");
$livroDidatico->setNivel(['médio', 'superior']);
?>


<h2>Dados</h2>
<h3>Técnico</h3>
<p><?=$livroTecnico->getTitulo()?></p>
<p><?=$livroTecnico->getAutor()?></p>
<p><?=$livroTecnico->getPaginas()?></p>
<p><?=$livroTecnico->getFormato()?></p>

<h3>Programação</h3>
<p><?=$livroProgramacao->getTitulo()?></p>
<p><?=$livroProgramacao->getAutor()?></p>
<p><?=$livroProgramacao->getPaginas()?></p>
<p><?=$livroProgramacao->getFormato()?></p>
<p><?=$livroProgramacao->getArea()?></p>

<h3>Didático</h3>
<p><?=$livroDidatico->getTitulo()?></p>
<p><?=$livroDidatico->getAutor()?></p>
<p><?=$livroDidatico->getPaginas()?></p>
<p><?=$livroDidatico->getFormato()?></p>
<p><?=$livroDidatico->getDisciplina()?></p>

<?php foreach($livroDidatico->getNivel() as $nivel){ ?>
<p> <?=$nivel?> </p>
<?php } ?>

<?php if($livroDidatico->getPaginas() > 100){ ?>
        <p>Traga uma mochila</p>
<?php } ?>



<pre> <?=var_dump($livroTecnico, $livroProgramacao, $livroDidatico)?></pre>
</body>
</html>


