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

 // php.net (switch)
 $i = 3;
   if ($i == 0){
     echo "i equals 0";
   }elseif ($i == 1){
     echo "i equals 1";
   }elseif ($i == 2) {
     echo "i equals 2";
   }else{
     echo "That's All right";
   }

   echo "<br/>";
   switch ($i){
    case 0:
        echo "i equals 0";
        break;

    case 1:
        echo "i equals 1";
        break;
    
    case 2:
        echo "i equals 2";
        break;
    default:
    echo "That's All right";
   }