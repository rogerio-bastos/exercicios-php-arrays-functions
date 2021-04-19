<?php
//Exercício 1
function somaVetor(array $vetor){
    $soma = 0;
    for($i = 0; $i < count($vetor); $i = $i + 1){
        $soma = $soma + $vetor[$i];
    }
    return $soma;
}

print_r(somaVetor([1, 2, 3, 4, 5]));