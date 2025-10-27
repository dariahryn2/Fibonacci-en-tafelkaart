<?php

function tafelkaart($n) {
    echo "Tafel van\t";
    for ($i = 1; $i <= $n; $i++) {
        echo $i . "\t";
    }

    for ($rij = 1; $rij <= $n; $rij++) {
        echo $rij . "\t";
        for ($kolom = 1; $kolom <= $n; $kolom++) {
            echo ($rij * $kolom) . "\t";
        }
    }
}
$n = (int)readline("Getal:");
tafelkaart($n);


?>