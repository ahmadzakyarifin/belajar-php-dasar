<?php

$string = "Belajar PHP";
$integer = 100;
$float = 10.5;
$boolean = true;
$array = [1, 2, 3];
$null = null;


//  is_string() -> Mengecek apakah variabel adalah sebuah String (teks)
var_dump(is_string($string)); // true
var_dump(is_string($integer)); // false

echo PHP_EOL;

//  is_int() atau is_integer() -> Mengecek apakah variabel adalah bilangan bulat (Integer)
var_dump(is_int($integer)); // true
var_dump(is_int($float)); // false (karena float ada komanya)

echo PHP_EOL;
// catatan pribadiku:
// is_function ini sangat amat penting dan sering dipakai di dunia nyata, 
// terutama untuk VALIDASI. Misalnya ngecek input dari form user, ngecek apakah data dari 
// database itu beneran array sebelum di foreach (biar gak error), dll.
// is_float() atau is_double() -> Mengecek apakah variabel adalah bilangan desimal (Float)
var_dump(is_float($float)); // true
var_dump(is_float($integer)); // false

echo PHP_EOL;

// is_bool() -> Mengecek apakah variabel adalah tipe data Boolean (true/false)
var_dump(is_bool($boolean)); // true
var_dump(is_bool("true")); // false (karena ini string berisikan tulisan "true")

echo PHP_EOL;

//  is_array() -> Mengecek apakah variabel adalah sebuah Array
var_dump(is_array($array)); // true
var_dump(is_array($string)); // false

echo PHP_EOL;

// is_null() -> Mengecek apakah variabel bernilai NULL (kosong)
var_dump(is_null($null)); // true
var_dump(is_null($string)); // false

echo PHP_EOL;

// is_numeric() -> Ini sedikit spesial. Dia mengecek apakah nilainya BISA DIANGGAP SEBAGAI ANGKA.
// Jadi baik integer, float, maupun STRING ANGKA ("100") akan dianggap true.
var_dump(is_numeric(100)); // true
var_dump(is_numeric(10.5)); // true
var_dump(is_numeric("1234")); // true (meskipun string, tapi isinya full angka)
var_dump(is_numeric("10 apel")); // false (karena ada teksnya)

echo PHP_EOL;

// is_callable() -> Mengecek apakah variabel bisa dipanggil sebagai fungsi (Function/Callback)
$sebuahFunction = function() {
    echo "Halo!";
};
var_dump(is_callable($sebuahFunction)); // true
var_dump(is_callable($string)); // false


echo PHP_EOL . "=== CONTOH DALAM IF STATEMENT ===" . PHP_EOL;

$dataInput = "1000";

if (is_numeric($dataInput)) {
    echo "Data valid, ini adalah angka: " . $dataInput . PHP_EOL;
} else {
    echo "Data TIDAK valid, ini bukan angka!" . PHP_EOL;
}


