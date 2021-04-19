<?php
    $listaCidades = [
        1 => "Jandira", 
        2 => "Itapevi", 
        3 => "Barueri", 
        4 => "Osasco", 
        5 => "Cotia", 
        6 => "Santana de Parnaíba", 
        7 => "Carapicuíba", 
        8 => "São Paulo"
    ];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viweport" content="width=device-width, initial-scale=1.0">
    <title> Exercício 5 </title>
    <link rel="stylesheet" href="./styles-global.css">
</head>
<body>
<form method="POST" action="./exercicio5-processamento.php">
        <div class="input-group">
            <label for="nome"> Escreva seu nome </label>
            <input type="text" name="nome" id="nome" required>
        </div>
        <div class="input-group">
            <label for="cidades"> Selecione sua cidade </label>
        </div>
        <div>
            <select id="cidades" name="cidades" required>
                <option value=""> Cidade </option>
                <?php 
                    foreach($listaCidades as $chave => $cidade){
                ?>
                        <option value="<?= $chave ?>"> <?= $cidade ?> </option>
                <?php 
                    }
                
                ?>
            </select> 
        </div>
        <div class = "input-group">
            <button> Enviar </button>
        </div>
    </form>
</body>
</html>