<?php
//Exercício 4
function deletarElemento(array $vetor, $valorSeraDeletado){
    foreach($vetor as $chave => $valor){
        if($valor == $valorSeraDeletado){
            unset($vetor[$chave]);

            return $vetor;
        }
            
    }
    return false;
}

print_r(deletarElemento(["Pedro", "Paulo"], "Pedro"));