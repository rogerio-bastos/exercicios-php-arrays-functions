<?php

function mediaNotas(array $notas){

    $soma = 0;
    for($i = 0; $i < count($notas); $i++){
        $soma = $soma + $notas[$i];
        $media = $soma / count($notas);
    }

    return $media;

}

print_r(mediaNotas([10, 5, 9, 3, 5, 1]));
