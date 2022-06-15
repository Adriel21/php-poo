<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 5</title>
</head>
<body>
    <h1>PHP POO - Exemplo 7</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Propriedades e Métodos Estáticos</li>
    </ul>
<?php
// Importando a classe
require_once "src/PessoaFisica.php"; // subclasse
require_once "src/PessoaJuridica.php"; // subclasse


 $clientePF = new PessoaFisica;
 $clientePF->setNome('Tiago');
 $clientePF->setIdade(38);







 // Acessando e atribuindo a propriedade estática
 PessoaFisica::$cidade = "São Paulo";
 // Acessa
 echo PessoaFisica::$cidade;
?>

<h3>Pessoa Física</h3>
<p> <?=$clientePF->getNome()?> </p>
<p> <?=$clientePF->getIdade()?> </p>
<p>Tipo de atendimento <?=PessoaFisica::verificaIdade($clientePF->getIdade())?></p>


</body>
</html>




