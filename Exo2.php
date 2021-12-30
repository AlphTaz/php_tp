<?php 

// Fontion de détection d'un pallindrome

// $string ="kayak";
// $reverse =strrev($string);

// if ($string = $reverse) {
//     echo ("C'est un pallindrome");
// }

// ------------------------------- 

// Fontion de détection d'un anagrame 



function anagram (string $mot, string $tocompare) {

    $lettermot ="";
    $lettertocompare ="";
    $result = "";

//  Vérification du nombre de caractère 


    if (strlen($mot) != strlen($tocompare)){
        echo ("Impossible qu'il s'agisse d'un anagrame.");
    }

//  Vérification des différents caractères si nombre identique  


    if (strlen($mot) === strlen($tocompare)){
        $lettermot = array(str_split($mot));
        $lettertocompare = array(str_split($tocompare));
        $result = array_diff($lettermot,$lettertocompare);
    }

    if (empty($result)) {
        echo ("C'est un anagrame.");

        } else {
            echo ("Il ne s'agit pas d'un anagrame.");

        }

}

anagram ("rata","star")

?>