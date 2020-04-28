<?php 
 $n = 12;
 $r = $n % 2;

 switch ($r){
   case 0:
    echo "{$n} is an evern number";
    echo "<br/>";
    break;
    default:
    echo "{$n} is an odd number";
 }

 $color = 'green';
 switch($color){
   /*case 'red':
   echo "Red is our favourite color";
   break;
   case'green':
   echo "Green is our favourite color";
   break;
   */
   case 'red':
   case 'green':
   echo ucwords($color)." is our favorite color";
   break;
   case 'blue':
   echo "Blue is not our favorite color";
   break;
   default:
   echo"This color is ok";
 }