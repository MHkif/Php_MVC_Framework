<?php


    $n = 5;
    for($i = $n; $i >= 2; $i--){
        global $n;
        $n = $n * ($n-$i);

        // echo $n;
    }
    echo $n;
