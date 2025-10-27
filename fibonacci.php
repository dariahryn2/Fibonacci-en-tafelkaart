<?php

// fibonacci reeks genereert
function fibonacci($n) {
    $num1 = 0;
    $num2 = 1;

    for ($i = 0; $i < $n; $i++) {
        echo $num1 . " ";

        $next = $num1 + $num2;
        $num1 = $num2;
        $num2 = $next;
    }

}

$n = (int)readline("Aantal stappen: ");
fibonacci($n);

?>