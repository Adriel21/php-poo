<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 1</title>
</head>
<body>
    <h1>PHP POO - Exemplo 1</h1>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Criação de classes</li>
        <li>Importação do arquivo de classe</li>
        <li>Criação dos objetos</li>
    </ul>

<?php 
// Importando a classe
    require_once "./src/Cliente.php";

    //Criação dos objetos
    $clienteA = new Cliente;
    $clienteB = new Cliente;

    echo '<pre>';
    var_dump($clienteA);
    var_dump($clienteB);
    echo '</pre>';
?>
</body>
</html>
