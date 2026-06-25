<?php
echo "=== 1. GLOBAL SCOPE ===" . PHP_EOL;

$nama = "Zaky"; 

function sapa() {
    global $nama;
    echo "Halo, $nama! (Dipanggil pakai keyword global)" . PHP_EOL;
    echo "Halo, " . $GLOBALS['nama'] . "! (Dipanggil pakai array \$GLOBALS)" . PHP_EOL;
}

sapa();

// catatan pribadiku:
// Berbeda dengan bahasa pemrograman lain (seperti JavaScript/Java), di PHP variabel global
// itu tertutup. Kalau kita mau pakai variabel global di dalam function, kita HARUS 
// secara eksplisit minta izin pakai kata kunci "global" atau manggil dari $GLOBALS.


echo PHP_EOL;
echo "=== 2. LOCAL SCOPE ===" . PHP_EOL;

function hitung() {
    $angkaLocal = 100;
    echo "Angka dari dalam function: $angkaLocal" . PHP_EOL;
}

hitung();

// echo $angkaLocal; // INI AKAN ERROR!
// Variabel local HANYA BISA DIAKSES di dalam function tempat dia dibuat.
// Begitu function selesai dieksekusi, variabel local tersebut akan langsung DIHAPUS dari memori.

// catatan pribadiku:
// Local scope itu ibarat barang rahasia di dalam kamar (function). 
// Orang dari luar (global) nggak bisa lihat atau ambil barang itu.


echo PHP_EOL;

echo "=== 3. STATIC SCOPE ===" . PHP_EOL;

// Ingat: Variabel local akan selalu dihapus setelah function selesai dieksekusi.
// Tapi, kadang kita ingin nilai variabel itu TETAP DISIMPAN (tidak dihapus) 
// untuk pemanggilan function selanjutnya. Di sinilah kita pakai "static".

function antrian() {
    $nomorBiasa = 1; 
    static $nomorStatic = 1;
    
    echo "Antrian Biasa : $nomorBiasa | Antrian Static: $nomorStatic" . PHP_EOL;
    
    $nomorBiasa++;
    $nomorStatic++;
}

// Mari kita panggil function-nya berkali-kali:
antrian(); // Panggilan pertama
antrian(); // Panggilan kedua
antrian(); // Panggilan ketiga

// catatan pribadiku:
// Coba perhatikan outputnya! 
// - $nomorBiasa selalu balik lagi jadi 1, karena dia dihapus & dibuat ulang setiap function dipanggil.
// - $nomorStatic nilainya terus bertambah (1, 2, 3) karena dia tidak dihapus dan mengingat 
//   nilai terakhirnya pada saat function dipanggil sebelumnya.
// Static ini sangat berguna kalau kita butuh counter/penghitung di dalam suatu function.

