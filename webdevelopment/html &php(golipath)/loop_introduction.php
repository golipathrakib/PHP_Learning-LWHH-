<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    for ($i = 1; $i<10; $i++){
        //echo $i;
        echo PHP_EOL;
        for($j=0; $j<$i;$j++){
          echo "*";
          
        }
      }
    echo PHP_EOL;
    echo"<br/>";
    $i=0;
    while($i<10){
      $i++;
      echo $i.PHP_EOL;
    }

    echo PHP_EOL;
    echo"<br/>";
    $i=0;
    do{
      $i++;
      echo $i.PHP_EOL;
    }while($i<10);

    echo PHP_EOL;
    echo"<br/>";
    echo "Go To";
    echo PHP_EOL;
    $i=0;
    a: $i++;
    echo $i.PHP_EOL;
    if($i<10) goto a;
    ?>
</body>
</html>