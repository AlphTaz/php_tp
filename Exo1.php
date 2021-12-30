<?php

function reverse ($phrase) 
{

   for ($i = strlen($phrase); $i >= 0; $i--) 
   {
    echo $phrase[$i];
   }
 }

reverse ("bonjour");

// -------------------------------------

// $x="";
//  strrev ($x);


?>
