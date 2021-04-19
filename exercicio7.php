<?php

function encontrarMaiorMenor(array $vetor){
    $maior = $vetor[0];
    $menor = $vetor[0];
    
    for($i=0; $i < count($vetor); $i++){
        if($vetor[$i] >=  $maior){
            $maior = $vetor[$i];
        }

        if($vetor[$i]<= $menor){
            $menor = $vetor[$i];
        }

        $resultado = [
            "maior" => $maior, 
            "menor" => $menor
        ]; 
    }
    return $resultado;
}

$valores = [10, 15, 5, 7, 2, 3];

print_r(encontrarMaiorMenor($valores));
