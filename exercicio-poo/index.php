<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio</title>
</head>
<body>
    <h1>Exercicio de POO - Realizando encapsulamento e métodos get e set</h1>
<?php 
// Importando a classe

    require_once "./src/livro.php";
    $livroA = new Livro;
    $livroB = new Livro;

    $livroA->setTitulo('Senhor dos Anéis');
    $livroB->setTitulo('Game of Thrones');

    $livroA->setAutor('Tolkien');
    $livroB->setAutor('Georger R.R Martin');

    $livroA->setPaginas(350);
    $livroB->setPaginas(600);
?>

<h2>Exibindo dados</h2>
<h3><?=$livroA->getTitulo()?></h3>
<p><?=$livroA->getAutor()?></p>
<p><?=$livroA->getPaginas()?> PÁGINAS</p>

<hr>
<h3><?=$livroB->getTitulo()?></h3>
<p><?=$livroB->getAutor()?></p>
<p><?=$livroB->getPaginas()?> PÁGINAS</p>


</body>
</html>
