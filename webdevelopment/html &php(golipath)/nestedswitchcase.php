<?php 
    $n = 11;
    $r = $n % 2;
    switch ($r){
      case 0:
        switch($n){
          case $n > 0:
            echo "$n is a positive even number";
            break;
          case $n < 0:
            echo "$n is a negative even number";
            break;
        }
        break;
        default;
        switch($n){
          case $n > 0:
            echo "$n is a positive odd number";
            break;
          case $n < 0:
            echo "$n is a negative odd number";
            break;
        }
    }

    //Second way of writing swtich case

    /*
    switch (true){
        case($r == 0 && $n>0);
            echo "$n is a positive ever number";
            break;
        case($r == 1 && $n>0);
            echo "$n is a positive odd number";
            break;
        case($r == 0 && $n<0);
            echo "$n is a negative ever number";
            break;
        case($r == 1 && $n<0);
            echo "$n is a negative odd number";
            break;
    }*/

    switch (true){
        case(0 == $r && $n>0);
            echo "$n is a positive ever number";
            break;
        case(1 == $r && $n>0);
            echo "$n is a positive odd number";
            break;
        case(0 == $r && $n<0);
            echo "$n is a negative ever number";
            break;
        case(-1 == $r && $n<0);
            echo "$n is a negative odd number";
            break;
    }

    ?>