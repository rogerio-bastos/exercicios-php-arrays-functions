<?php
    //Redirecionando o usuário para a página do formulário
    if(!isset($_POST["nome"]) || !isset($_POST["cidades"] )){  
        header("location: exercicio5.php");
    } 
    
    $listaCidades = [
        1 => "Jandira", 
        2 => "Itapevi", 
        3 => "Barueri", 
        4 => "Osasco", 
        5 => "Cotia", 
        6 => "Santana de Parnaíba",
        7 => "Carapicuíba",
        8 => "São Paulo",
    ];

    $nome = $_POST["nome"];
    $cidades = $_POST["cidades"];


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Exercício 5 - Processamento </title>
    <link rel="stylesheet" href="./styles-global.css">
</head>
<body>
    <h1> Olá <?= $nome ?>, de <?= $listaCidades[$cidades] ?>, seja bem-vindo. </h1>
</body>


</html>