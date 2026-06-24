<?php

goto a;
echo "hello " . PHP_EOL;

a:
echo "hello a " . PHP_EOL;

// catatan pribadiku
// goto itu akan melompati kode yang ada setelahnya
// goto itu jarang digunakan karena bisa bikin kode susah dibaca


// contoh lain : 

for ($i = 0; $i < 10; $i++) {
    goto b;
    echo "ini dari dalam" . PHP_EOL;
}

b:
echo "ini dari luar" . PHP_EOL;
