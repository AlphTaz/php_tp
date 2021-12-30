<?php 

// Fontion de détection d'un pallindrome

$string ="kayak";
$reverse =strrev($string);

if ($string = $reverse) {
    echo ("C'est un pallindrome");
}

// ------------------------------- 

// Fontion de détection d'un anagrame 



//  Vérification du nombre de caractère 

function anagram (string $mot, string $tocompare) {

    if (strlen($mot) != strlen($tocompare)){
        echo ("Impossible qu'il s'agisse d'un anagrame.");
    }

    if (strlen($mot) == strlen($tocompare)){
        
    }

}
?>