<?php
//Exercício 2
function procurarNome(array $nomes, $nome){
    foreach ($nomes as $nomeEncontrado) {
        if ($nomeEncontrado == $nome) {
            return true;
        } 
    }
    return false;

}

print_r(procurarNome(["Rafael", "Leonid", "Celso", "Marcel", "Rogério", "Paulo"], "Pedro"));