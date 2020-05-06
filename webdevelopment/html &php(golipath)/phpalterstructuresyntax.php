<?php
<?php 
/*$n = 13;
if ($n%2==0){
  echo "Even Number";
  }else{
    echo "Odd Number";
  }


echo PHP_EOL;
echo PHP_EOL;
if ($n%2==0):
    echo "Even Number";
    echo PHP_EOL;
    echo "Some Text";
    echo PHP_EOL;
    echo "Rakibul doing hard work.";

else:
    echo"Odd Number";
    echo PHP_EOL;
    echo "Some Text ++";
    echo PHP_EOL;
    echo "Rakibul not doing hard work.";
endif;

echo PHP_EOL;

switch ($n%2 == 0):
case 0;
echo "Even Number";
break;
default:
echo "Odd Number";
endswitch;*/

$n = 13;

if ($n%2==0):
?>
Even Number
some Text
<?php
else:
?>
Odd Number 
Some Text ++
<?php
endif;
?>

