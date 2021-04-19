<?php
//Exercício 3
function inverterVetor(array $vetor){
    $vetorInvertido = [];
    
    for($i = (count($vetor)-1);  $i >= 0; $i-- ){
        $vetorInvertido [] = $vetor[$i];
    }
    
    print_r($vetorInvertido);
}

inverterVetor(["a", "b", "c", "d"]);
