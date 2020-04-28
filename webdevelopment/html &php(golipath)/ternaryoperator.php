<?php
//$n = 12;
$n = 10;
if( 12 == $n){
  echo "Twelve";
}else if(10 == $n){
  echo "Ten";
}else{
  echo "A Number";
}

echo "<br/>";
//$numberInWord = (12 == $n) ? "Twelve" : "A Number";
$numberInWord = (12 == $n) ? "Twelve" : (10 == $n) ? "Ten" : "A Number";//ternary operator

echo $numberInWord;

echo "<br/>";

if ($n % 2 == 0){
  echo "Even Number";
}else{
  echo "Odd Number";
}

echo "<br/>";

$result = ($n % 2 == 0) ? " {$n} is an Even Number" : " {$n} is a Odd Number";//ternary operator
echo $result;
?>