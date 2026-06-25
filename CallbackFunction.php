<?php

// Callback function = function yang dikirim sebagai argumen ke function lain
// jadi function itu bisa dipanggil di dalam function lain

// --- Contoh 1: Callback sederhana ---

function sapa($nama, $callback) {
    echo "Hallo $nama" . PHP_EOL;
    $callback($nama); 
}

// kita kirim anonymous function sebagai callback
sapa("Zaky", function ($nama) {
    echo "Selamat datang $nama!" . PHP_EOL;
});

// catatan pribadiku 
// jadi kita bisa kirim function ke function lain lewat parameter
// function yang dikirim itu yang namanya "callback"
// callback bakal di panggil/eksekusi di dalam function yang menerima

echo PHP_EOL;

// --- Contoh 2: Callback dengan named function ---

function ucapanPagi($nama) {
    echo "Selamat Pagi $nama!" . PHP_EOL;
}

function ucapanMalam($nama) {
    echo "Selamat Malam $nama!" . PHP_EOL;
}

function greeting($nama, $callback) {
    echo "=== Greeting ===" . PHP_EOL;
    $callback($nama);
}

greeting("Zaky", "ucapanPagi");   // kirim nama function sebagai string
greeting("Zaky", "ucapanMalam");  // beda callback, beda perilaku

// catatan pribadiku
// kita bisa kirim nama function sebagai string juga (bukan cuma anonymous function)
// ini berguna kalau mau ganti-ganti perilaku tanpa ubah function utamanya

echo PHP_EOL;

// ============================================
// CALL_USER_FUNC
// ============================================
// call_user_func() = cara lain untuk memanggil callback function
// sama kayak $callback() tapi lebih eksplisit

echo "=== call_user_func ===" . PHP_EOL;

// --- Contoh 1: panggil function biasa pakai call_user_func ---
function kali($a, $b) {
    return $a * $b;
}

$hasil = call_user_func("kali", 5, 3);
echo "5 x 3 = $hasil" . PHP_EOL;

// --- Contoh 2: panggil anonymous function pakai call_user_func ---
$tambah = function ($a, $b) {
    return $a + $b;
};

$hasil = call_user_func($tambah, 10, 20);
echo "10 + 20 = $hasil" . PHP_EOL;

// --- Contoh 3: call_user_func_array (kirim argumen pakai array) ---
$hasil = call_user_func_array("kali", [4, 6]);
echo "4 x 6 = $hasil" . PHP_EOL;

// catatan pribadiku
// call_user_func("namaFunction", arg1, arg2) => panggil function dengan argumen satu-satu
// call_user_func_array("namaFunction", [arg1, arg2]) => panggil function dengan argumen dari array
// bedanya sama $callback() => call_user_func lebih aman karena bisa cek dulu function-nya ada atau engga
// biasanya dipakai kalau nama function-nya dinamis (dari variabel/input)

echo PHP_EOL;

// ============================================
// ARRAY_FILTER
// ============================================
// array_filter() = function bawaan PHP untuk menyaring/filter isi array
// dia pakai callback function untuk menentukan mana yang lolos filter

echo "=== array_filter ===" . PHP_EOL;

// --- Contoh 1: Filter angka genap ---
$angka = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$genap = array_filter($angka, function ($nilai) {
    return $nilai % 2 == 0; // true = masuk hasil, false = dibuang
});

echo "Angka genap: ";
print_r($genap);

// --- Contoh 2: Filter angka ganjil ---
$ganjil = array_filter($angka, function ($nilai) {
    return $nilai % 2 != 0;
});

echo "Angka ganjil: ";
print_r($ganjil);

// --- Contoh 3: Filter string berdasarkan panjang ---
$nama = ["Andi", "Bo", "Christina", "Di", "Elephant"];

$namaPanjang = array_filter($nama, function ($n) {
    return strlen($n) > 3; // hanya ambil nama yang lebih dari 3 huruf
});

echo "Nama lebih dari 3 huruf: ";
print_r($namaPanjang);

// --- Contoh 4: Filter pakai arrow function (lebih singkat) ---
$angkaBesar = array_filter($angka, fn($n) => $n > 5);

echo "Angka lebih dari 5: ";
print_r($angkaBesar);

// --- Contoh 5: array_filter tanpa callback (hapus nilai falsy) ---
$campuran = [0, 1, "", "hello", null, false, true, 42];

$bersih = array_filter($campuran); // tanpa callback = hapus semua yang falsy (0, "", null, false)

echo "Setelah filter falsy: ";
print_r($bersih);

// catatan pribadiku
// array_filter($array, $callback) => looping setiap elemen, kalau callback return true maka masuk hasil
// kalau tanpa callback => otomatis hapus nilai yang dianggap false (0, "", null, false, [])
// array_filter TIDAK mengubah array asli, tapi return array baru
// index/key array tetap dipertahankan (tidak di-reset)
// kalau mau reset index, bungkus pakai array_values(): array_values(array_filter(...))

echo PHP_EOL;

// ============================================
// KOMBINASI: Callback + call_user_func + array_filter
// ============================================
echo "=== Kombinasi ===" . PHP_EOL;

$siswa = [
    ["nama" => "Zaky", "nilai" => 85],
    ["nama" => "Budi", "nilai" => 60],
    ["nama" => "Citra", "nilai" => 92],
    ["nama" => "Dian", "nilai" => 45],
    ["nama" => "Eka", "nilai" => 78],
];

// filter siswa yang lulus (nilai >= 70)
$lulus = array_filter($siswa, function ($s) {
    return $s["nilai"] >= 70;
});

echo "Siswa yang lulus (nilai >= 70):" . PHP_EOL;
foreach ($lulus as $s) {
    echo "  - " . $s["nama"] . " (nilai: " . $s["nilai"] . ")" . PHP_EOL;
}

// pakai call_user_func untuk memanggil function filter secara dinamis
function filterNilaiTinggi($s) {
    return $s["nilai"] >= 80;
}

$nilaiTinggi = array_filter($siswa, "filterNilaiTinggi");

echo "Siswa nilai tinggi (>= 80):" . PHP_EOL;
foreach ($nilaiTinggi as $s) {
    echo "  - " . $s["nama"] . " (nilai: " . $s["nilai"] . ")" . PHP_EOL;
}

// catatan pribadiku
// jadi callback, call_user_func, dan array_filter itu saling berkaitan:
// - callback = konsep kirim function sebagai parameter
// - call_user_func = cara panggil callback secara eksplisit
// - array_filter = salah satu function bawaan PHP yang pakai callback
// function bawaan lain yang pakai callback: array_map, array_walk, usort, dll
