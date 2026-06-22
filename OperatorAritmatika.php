<?php

$angka1 = 10;
$angka2 = 5;

// Penjumlahan
$jumlah = $angka1 + $angka2;
echo "Hasil Penjumlahan: " . $jumlah . "\n";

// Pengurangan
$kurang = $angka1 - $angka2;
echo "Hasil Pengurangan: " . $kurang . "\n";

// Perkalian
$kali = $angka1 * $angka2;
echo "Hasil Perkalian: " . $kali . "\n";

// Pembagian
$bagi = $angka1 / $angka2;
echo "Hasil Pembagian: " . $bagi . "\n";

// Modulus
$modulus = $angka1 % $angka2;
echo "Hasil Modulus: " . $modulus . "\n";

echo <<<bebas
Hasil Pengurangan: $kurang
Hasil Perkalian: $kali
Hasil Pembagian: $bagi
Hasil Modulus: $modulus
bebas;

echo "\n";


//  ===================

$total = 0;
$diskon = 0.5;

$makanan = 10000;
$minuman = 5000;
$snack = 2000;

$total += $makanan;
$total += $minuman;
$total += $snack;

$potongan = $total * $diskon;
$total -= $potongan;

echo "Total Belanja: " . $total . "\n";