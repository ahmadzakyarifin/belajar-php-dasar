<?php

$count = 1;

while (true) {

    echo "$count" . PHP_EOL;
    $count++;

    if ($count == 3) {
        echo "selesai masbro " . PHP_EOL;
        continue;
    };
    if ($count == 5) {
        echo "count sudah mencapai 5" . PHP_EOL;
        break;
    };
}

// catatan pribadiku
//  jadi continue itu akan melewati kode yang ada setelahnya 
//  kalau break  itu akan menghentikan perulangan