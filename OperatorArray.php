<?php

// $first = [
//     "first_name" => "ahmad"
// ];

// $middle = [
//     "middle_name" => "zaky"
// ];

// $last = [
//     "last_name" => "arifin"
// ];

// $full_name = $first + $middle + $last;
// var_dump($full_name);

$array1 = array(
    "first_name" => "ahmad"
);

$array2 = array(
    "first_name" => "muhammad",
    "middle_name" => "zaky"
);

// bentuk 1
$coba1 = $array1 + $array2;
var_dump($coba1);

// bentuk 2 
$coba2 = $array2 + $array1;
var_dump($coba2);

// bentuk 3
$coba3 = array_merge($array1, $array2);
var_dump($coba3);


//  catatan pribadiku
// Operator + pada array bukan merge murni, tetapi lebih mirip union.
// Konsepnya:
// ambil semua isi array sebelah kiri
// lalu lihat array sebelah kanan
// jika ada key di kanan yang belum ada di kiri, tambahkan
// jika key di kanan sudah ada di kiri, maka nilai kiri tetap dipakai
// Inti singkat:
// Kalau pakai +, array kiri diprioritaskan.

// array_merge() benar-benar dipakai untuk menggabungkan isi array menjadi array baru.
// Konsepnya:
// gabungkan semua isi array
// jika ada key string yang sama, maka nilai dari array yang paling belakang / paling kanan akan menimpa yang sebelumnya
// Inti singkat:
// Kalau pakai array_merge(), key string yang bentrok akan diambil dari array yang paling kanan / paling belakang.

$a = [
    "first_name" => "ahmad",
    "middle_name" => "zaky",
    "last_name" => "arifin"
];

$b = [
    "middle_name" => "zaky",
    "last_name" => "arifin",
    "first_name" => "muhammad"
];

var_dump($a == $b);
var_dump($a === $b); 
