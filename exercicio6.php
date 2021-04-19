<?php
    function retornarChaves(array $vetor){
        $key = [];
        foreach($vetor as $chaves => $elementos){
            echo $elementos;
            
            echo "<br/>";
            
            $key[] = $chaves;
        }

        return $key;
    }

    print_r(retornarChaves(["a", "b", "c", "d"]));

?>