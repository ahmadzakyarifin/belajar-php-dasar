<?php
// Di PHP, Reference adalah cara untuk membuat dua variabel menunjuk ke
// LOKASI MEMORI YANG SAMA. Artinya, jika salah satu variabel diubah nilainya,
// variabel yang satunya lagi akan IKUT BERUBAH.
// Simbol untuk membuat reference adalah "&" (ampersand).

echo "=== 1. ASSIGN BY REFERENCE ===" . PHP_EOL;

$nama1 = "Zaky";
// Biasanya kalau kita copy variabel: $nama2 = $nama1; (ini copy isi/value saja)
// Kalau pakai reference, tambahkan & di depannya:
$nama2 = &$nama1; 

echo "Sebelum diubah:" . PHP_EOL;
echo "nama1: $nama1" . PHP_EOL; // Zaky
echo "nama2: $nama2" . PHP_EOL; // Zaky

// Sekarang kita coba ubah $nama2
$nama2 = "Budi";

echo PHP_EOL . "Setelah nama2 diubah menjadi 'Budi':" . PHP_EOL;
echo "nama1: $nama1" . PHP_EOL; // Ikut berubah jadi Budi!
echo "nama2: $nama2" . PHP_EOL; // Budi

// catatan pribadiku:
// Bayangkan $nama1 dan $nama2 adalah dua remote TV yang terhubung ke TV yang sama.
// Kalau remote $nama2 ganti channel, maka TV yang ditonton oleh remote $nama1 
// pasti ikut ganti channel. Mereka nempel!


echo PHP_EOL;

echo "=== 2. PASS BY REFERENCE (FUNCTION) ===" . PHP_EOL;

// Ingat materi "Local Scope"? Variabel dalam function tidak mengubah variabel luar.
// KECUALI kita pakai Reference!

function tambahSatuBiasa($angka) {
    $angka++; // Ini hanya mengubah copy-an local
}

function tambahSatuReference(&$angka) { // Perhatikan ada tanda & di parameter
    $angka++; // Ini akan mengubah variabel asli yang dikirim!
}

$poinKu = 10;

tambahSatuBiasa($poinKu);
echo "Pakai fungsi biasa     : $poinKu" . PHP_EOL; // Tetap 10

tambahSatuReference($poinKu);
echo "Pakai fungsi reference : $poinKu" . PHP_EOL; // Berubah jadi 11!

// catatan pribadiku:
// Pass by Reference ini SANGAT berguna kalau kita mau bikin function yang
// tugasnya meng-update/mengedit suatu variabel yang sudah ada, tanpa perlu 
// repot-repot nge-return nilainya. 
// Contoh di dunia nyata: array_sort(), rsort(), array_push() itu semuanya pakai pass by reference 
// di dalam mesin PHP-nya, makanya array asli kita langsung berubah!

