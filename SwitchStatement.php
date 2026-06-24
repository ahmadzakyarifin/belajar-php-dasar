<?php

$nilai = "D";

switch ($nilai) {
    case "A":
        echo "Sangat Baik" . PHP_EOL;
        break;
    case "B":
        echo "Baik" . PHP_EOL;
        break;
    case "C":
        echo "Cukup" . PHP_EOL;
        break;
    case "D":
        echo "Kurang" . PHP_EOL;
        break;
    default:
        echo "Nilai tidak valid" . PHP_EOL;
}


//  kasus lain 

switch ($nilai) {
    case "A":
    case "B":
        echo "Anda Lulus" . PHP_EOL;
        break;
    default:
        echo "Anda Tidak Lulus" . PHP_EOL;
}

switch ($nilai) :
    case "A":
    case "B":
        echo "Anda Lulus" . PHP_EOL;
        break;
    default:
        echo "Anda Tidak Lulus" . PHP_EOL;
endswitch;