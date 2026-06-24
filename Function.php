<?php

hello();

function hello() {
    echo "Hello" . PHP_EOL;
}

hello();

//  catatan pribadiku 
//  akan tetep jalan sekalipun panggil dulu sebelum di buat karena di set global

$a = true;

if ($a) {
    function hai() {;
        echo "haiii " . PHP_EOL;
    }
}

hai();

// catatan pribadiku
//  Pada Tahap Kompilasi, PHP mencatat semua fungsi yang ada.
//  Pada Tahap Eksekusi, baris kodemu meminta PHP memanggil fungsi bernama hitungGaji().
//  PHP mengecek daftar memori fungsinya. Ternyata hitungGaji() tidak ada di dalam daftarnya.
//  Karena PHP adalah bahasa pemrograman yang ketat dalam hal ini, ia tidak bisa menebak apa yang harus dilakukan.
//  Akhirnya, PHP menyerah dan melempar Fatal Error (Call to undefined function hitungGaji()).
