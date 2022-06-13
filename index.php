<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 5</title>
</head>
<body>
    <h1>PHP POO - Exemplo 6</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Polimorfismo</li>
    </ul>
<?php
// Importando a classe
require_once "src/PessoaFisica.php"; // subclasse
require_once "src/PessoaJuridica.php"; // subclasse


$clientePF = new PessoaFisica;
$clientePF->setNome('Tiago');
$clientePF->setEmail('tiago@gmail.com');
$clientePF->setSenha('123abc');
$clientePF->setCpf('123.456.789-00');
$clientePF->setIdade(38);

$clientePJ = new PessoaJuridica;
$clientePJ->setNome("Jon Oliva");
$clientePJ->setCnpj("32.088.0001/000-41");



 //$clientePF->setSituacao("pendente");
 //$clientePF->getSituacao();
?>
<h3>Pessoa Física</h3>
<p> <?=$clientePF->getNome()?> </p>

<h3>Pessoa Jurídica</h3>
<p> <?=$clientePJ->getNome()?> </p>

<hr>
<section> <?=$clientePF->exibirDados()?> </section>
<section> <?=$clientePJ->exibirDados()?> </section>

<pre> <?=var_dump($clientePF, $clientePJ)?> </pre>


</body>
</html>




