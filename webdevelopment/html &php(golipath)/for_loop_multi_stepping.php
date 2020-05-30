<?php
/*for($i = 10; $i > 0; $i-- ){
    echo $i;
    echo "<br/>";
    echo PHP_EOL;
    }*/
    /*for($i = 10; $i > 0; $i-=1 ){
        echo $i.":".(11-$i);
        echo "<br/>";
        echo PHP_EOL;
        }*/
    for ($i = 10, $j = 1; $i > 0; $i-=1,$j++){
        echo $i.":".$j;
        echo "<br>";
    }