<?php

function numeroPrimo (int $numero){
    for($i = 2; $i < $numero; $i++){
        
        $resto = $numero % $i;
        
        if($resto == 0){
            return "O $numero não é Primo";
        }
    }
    return "O $numero é Primo";
}

echo numeroPrimo(11);


