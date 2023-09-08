<?php
    
function my_str_search (string $haystack, string $needle) : int {

    $needleCount = 0;  # car notre compte et a zero
     for ($i=0; isset($haystack[$i]); $i++) {  # isset continue tant que l'element haystack existe , i++ sert verifier a chauque fois la chaine de caractere 
        if ($haystack[$i] == $needle) {  #verifie si la valeur de l'element a l'indice $i dans la variable $haystack est egale a la valeur de la variable $needle
            $needleCount++; # continue a ajouter
        } 
    }
    echo $needleCount;
    return($needleCount);
}
    my_str_search('La Plateforme', 'a'); 