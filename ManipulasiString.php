<?php

$mahasiswa = "Ahmad Zaky Arifin";

echo "Nama : ";
echo $mahasiswa;
echo "\n";

echo <<<EOT
Nama : $mahasiswa
EOT;

echo "\nNama : " . $mahasiswa . "\n";

//  ===================

$string = (string)100;
var_dump($string);

$int = (int)"100";
var_dump($int);

$float = (float)"100.50";
var_dump($float);

//  kalau salah akan jadi 0

$int = (int)"abc";
var_dump($int);

$float = (float)"abc";
var_dump($float);

// ============================

// akses karakter

$nama = "wafi";
echo $nama[0] . PHP_EOL;
echo $nama[1] . PHP_EOL;
echo $nama[2] . PHP_EOL;
echo $nama[3] . PHP_EOL;
// echo $nama[4] . PHP_EOL;

//  catatan pribadiku 
//  kalau misal melebihi index atau karakternya egga ada maka akan error'
// PHP_EOL adalah konstanta bawaan PHP yang berarti End Of Line (akhir baris) di gunakan unutk memebuat new line soalnya di windows dan linux beda


// ===========================

// variabel parsing 

echo "Nama : $nama" . PHP_EOL;

// catatan pribadiku 
//  jadi kalau pakai "" atau pakai heredoc bisa memakai $ dan menampilkan nilai variabel

//  ===========================

//  curly braces

$coba = "hallo";

echo "Nama : {$coba}s" . PHP_EOL;

//  catatan pribadiku
//  jadi salah satu kegunaan curly brace dalam string adalah mempertegas batasan variabel
//   {$coba} sekalipun ada teks di sekitarnya, PHP tetap bisa mengenali bahwa itu adalah variabel. misal {$coba}123 itu tetep variabel coba
//  nah sebenernya bisa juga kayak  {$coba} 123. Jadi akan menganggap {$coba} sebagai variabel dan 123 sebagai teks biasa.
// nah tapi karena kita biar lebih jelas, biasanya kita pakai {$coba} 123 , kalau misal terlanjur pakai {$coba}123
//  maka PHP akan mencari $coba dan akan menambahkan variabel 123 di belakang nilainya . misal : {$coba}123 => hallo123
//  jadi kayak seakan akan menambah kata atau kalimat baru. bisa juga kayak {$coba}_123haaa => hallo_123haaa.

//  istilah istilah di programan :
//  {} => Curly Braces
//  [] => Square Brackets
//  () => Parentheses