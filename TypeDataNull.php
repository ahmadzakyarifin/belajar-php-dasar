<?php

$nama = null;
$umur = null;

echo "Nama : ";
echo $nama;
echo "\n";

echo "Umur : ";
echo $umur;
echo "\n";


// Null adalah tipe data yang menunjukkan bahwa sebuah variabel tidak memiliki nilai

echo "Is Nama null : ";
echo is_null($nama) ? "true" : "false";
echo "\n";

echo "Is Nama null : ";
var_dump(is_null($nama));
echo "\n";

echo "Is Umur null : ";
echo is_null($umur) ? "true" : "false";
echo "\n";

echo "Is Umur null : ";
var_dump(is_null($umur));
echo "\n";

// is_null() digunakan untuk memeriksa apakah sebuah variabel bernilai null

$contoh = "coba";
unset($contoh);

echo $contoh;

// unset() digunakan untuk menghapus variabel
// jadi akan error jika diakses setelah di-unset

$coba = "coba";
var_dump(isset($coba));

// isset() digunakan untuk memeriksa apakah sebuah variabel dan tidak bernilai null
