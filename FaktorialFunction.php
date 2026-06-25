<?php

function faktorial($nilai) {
    $total = 1;
    for ($i = 1; $i <= $nilai; $i++) {
        $total *= $i;
    }
    return $total;
}

echo faktorial(5) . PHP_EOL;

//  kalau pakai rekursif
function faktorialRekursif($nilai) {
    if ($nilai == 1) {
        return 1;
    }
    return $nilai * faktorialRekursif($nilai - 1);
}

echo faktorialRekursif(5) . PHP_EOL;
