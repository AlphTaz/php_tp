<?php

function reverse ($phrase) 
{

$final = "";

   for ($i = strlen($phrase); $i >= 0; $i--) 
   {
     $final += $phrase[$i];
   }
   echo ($final);

 }

reverse ("bonjour");

?>
