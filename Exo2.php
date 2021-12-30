<?php 

// Fontion de détection d'un pallindrome

$string ="kayak";
$reverse =strrev($string);

if ($string = $reverse) {
    echo ("C'est un pallindrome");
}

// ------------------------------- 

// Fontion de détection d'un anagrame 

$string ="star";
$reverse = "rats";

//  Vérification du nombre de caractère 

if (strlen($string) != strlen($reverse)){
    echo ("Impossible qu'il s'agisse d'un anagrame.");
}


?>