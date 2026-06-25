<?php



echo "=== MENGGUNAKAN INCLUDE ===" . PHP_EOL;

// INCLUDE
// Memasukkan file. Jika file TIDAK DITEMUKAN, PHP hanya akan memunculkan peringatan (WARNING),
// tapi program akan TETAP DILANJUTKAN ke baris berikutnya.
include "MyFunction.php"; 
echo sayHello("Budi") . PHP_EOL;
echo "Variabel dari file lain: $dataUser" . PHP_EOL;

// Coba include file yang tidak ada
// include "FileYangTidakAda.php"; // Ini akan memunculkan Warning, tapi kode di bawahnya tetap jalan.
echo "Program masih berjalan setelah include..." . PHP_EOL;

echo PHP_EOL . "=== MENGGUNAKAN REQUIRE ===" . PHP_EOL;

// REQUIRE
// Sama seperti include (memasukkan file). TAPI bedanya: Jika file TIDAK DITEMUKAN,
// PHP akan memunculkan ERROR FATAL (Fatal Error), dan program akan LANGSUNG BERHENTI.

// Karena sebelumnya kita sudah memanggil 'include "MyFunction.php"', kalau kita panggil 'require'
// biasa lagi di bawah ini, PHP akan error "Cannot redeclare function".
// Itulah mengapa di bawah ini kita langsung bahas versi "_once".

// Coba require file yang tidak ada (Silakan uncomment untuk melihat errornya)
// require "FileYangTidakAda.php"; // Ini akan membuat Fatal Error dan program langsung mati.
// echo "Teks ini tidak akan pernah dicetak jika require di atas gagal"; 

// ==========================================
// INCLUDE_ONCE & REQUIRE_ONCE
// ==========================================
echo PHP_EOL . "=== MENGGUNAKAN INCLUDE_ONCE & REQUIRE_ONCE ===" . PHP_EOL;

// Kenapa butuh "_once"?
// Terkadang tanpa sadar kita me-require/meng-include file yang SAMA berkali-kali.
// Kalau isi filenya adalah sebuah function, PHP akan ERROR karena function tidak boleh 
// dideklarasikan dua kali dengan nama yang sama.

// INCLUDE_ONCE & REQUIRE_ONCE
// Memasukkan file hanya SATU KALI SAJA. Jika file tersebut sebelumnya sudah pernah di-include/require,
// maka pemanggilan selanjutnya akan diabaikan oleh PHP.

include_once "MyFunction.php"; // Diabaikan karena MyFunction.php sudah di-include di baris atas
require_once "MyFunction.php"; // Diabaikan juga

echo sayHello("Citra") . PHP_EOL;

// catatan pribadiku:
// PERBEDAAN UTAMA:
// - INCLUDE = Kalau gagal (file gak ada), program TETAP JALAN.
// - REQUIRE = Kalau gagal, program MATI TOTAL (Fatal Error).
// 
// KAPAN PAKAI YANG MANA?
// - Gunakan REQUIRE untuk file penting yang membuat program gak bisa jalan kalau filenya gak ada 
//   (misalnya: file koneksi database, file konfigurasi, class utama).
// - Gunakan INCLUDE untuk file yang gak terlalu penting (misalnya: template header/footer di HTML, 
//   kalau gagal tampil ya cuma tampilannya yang kurang, tapi sistemnya tetep jalan).
// - Biasakan pakai REQUIRE_ONCE atau INCLUDE_ONCE agar aman dari error "Cannot redeclare function".

//  terus bedanya include_once dan require_one apa ?
// Jawabannya: 
// Perbedaannya SAMA PERSIS seperti bedanya include dan require biasa.
// - include_once: Kalau file-nya tidak ada, dia cuma ngasih WARNING, program TETAP JALAN.
// - require_once: Kalau file-nya tidak ada, dia ngasih FATAL ERROR, program MATI TOTAL.
//
// Jadi kata "_once" itu cuma nambahin fitur "pastikan cuma dipanggil sekali", 
// sedangkan kata depan "include/require" tetap membawa sifat aslinya (Warning vs Fatal Error).
