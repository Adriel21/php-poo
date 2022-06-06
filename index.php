<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 2</title>
</head>
<body>
    <h1>PHP POO - Exemplo 2</h1>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Criação dos objetos</li>
        <li>Uso do método constructor</li>
        <li>Uso do <code>$this</code> para acessar as propriedades</li>
    </ul>

<?php 
// Importando a classe
    require_once "./src/Cliente.php";

    //Criação dos objetos
    $clienteA = new Cliente('Adriel', 'adrieldias2001@hotmail.com');
    $clienteB = new Cliente('Kurt Cobain', 'nirvana12@gmail.com');

    echo '<pre>';
    var_dump($clienteA);
    var_dump($clienteB);
    echo '</pre>';
?>
</body>
</html>
