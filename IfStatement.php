<?php

$nilai = 85;

if ($nilai >= 90) {
    echo "A" . PHP_EOL;
} elseif ($nilai >= 75) {
    echo "B" . PHP_EOL;
} elseif ($nilai >= 60) {
    echo "C" . PHP_EOL;
} else {
    echo "D" . PHP_EOL;
}

// atau bisa

if ($nilai >= 90) :
    echo "A" . PHP_EOL;
elseif ($nilai >= 75) :
    echo "B" . PHP_EOL;
elseif ($nilai >= 60) :
    echo "C" . PHP_EOL;
else :
    echo "D" . PHP_EOL;
endif;

// atau bisa



