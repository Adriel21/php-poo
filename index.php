<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 3</title>
</head>
<body>
    <h1>PHP POO - Exemplo 4</h1>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Encapsulamento</li>
        <li>Modificadores de visibilidade</li>
        <li>Métodos de acesso: getters e setters</li>
    </ul>

<?php 
// Importando a classe

    require_once "./src/Cliente.php";

   

    //Criação dos objetos
    $clienteA = new Cliente;
    $clienteB = new Cliente;

    // Atribuindo dados via setters do objeto
    $clienteA->setNome('Adriel');
    $clienteB->setNome('Tiago');

    $clienteA->setEmail('adrieldiasdossantoslira@hotmail.com');
    $clienteB->setEmail('adrieldias2001@hotmail.com');

    $clienteA->setSenha('bi');
    $clienteB->setSenha('biloca');




    
?>

<h2>Dados dos objetos (leitura)</h2>
<h3><?=$clienteA->getNome()?></h3>
<p>E-mail: <?=$clienteA->getEmail()?></p>
<p>Senha: <?=$clienteA->getSenha()?></p>


<h3><?=$clienteB->getNome()?></h3>
<p>E-mail: <?=$clienteB->getEmail()?></p>
<p>Senha: <?=$clienteB->getSenha()?></p>







</body>
</html>
