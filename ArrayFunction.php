<?php


$data = [1, 2, 3, 4, 5];

echo "=== ARRAY MAP ===" . PHP_EOL;
$kaliDua = array_map(fn($n) => $n * 2, $data);
print_r($kaliDua);

// catatan pribadiku: 
// array_map itu dipakai untuk MENGUBAH (memodifikasi) setiap isi dari sebuah array secara serentak, 
// lalu menghasilkan array baru dengan isi yang sudah diubah tersebut.


echo PHP_EOL . "=== ARRAY FILTER ===" . PHP_EOL;
$genap = array_filter($data, fn($n) => $n % 2 == 0);
print_r($genap);

// catatan pribadiku 
// array_filter = MENYARING data di array. Jika callback return true, datanya dimasukkan ke array baru

echo PHP_EOL . "=== ARRAY REDUCE ===" . PHP_EOL;
$total = array_reduce($data, fn($carry, $item) => $carry + $item, 0);
echo "Total penjumlahan array: $total" . PHP_EOL;

// catatan pribadiku 
// array_reduce = MENGGABUNGKAN/MENYUSUTKAN semua nilai di array menjadi 1 nilai akhir (contoh: menjumlahkan)

echo PHP_EOL . "=== MENGURUTKAN ARRAY (SORT & RSORT) ===" . PHP_EOL;
$acak = [4, 1, 5, 2, 3];
rsort($acak); // urutkan dari terbesar
echo "Setelah rsort: ";
print_r($acak);

sort($acak); // urutkan dari terkecil
echo "Setelah sort: ";
print_r($acak);

// catatan pribadiku 
// sort = mengurutkan dari kecil ke besar (ascending)
// sort = mengurutkan dari besar ke kecil (descending/reverse)
// catatan: function sort dan rsort MENGUBAH array aslinya langsung (tidak return array baru)

echo PHP_EOL . "=== ARRAY KEYS & VALUES ===" . PHP_EOL;
$person = [
    "nama" => "Zaky",
    "umur" => 20,
    "pekerjaan" => "Programmer"
];
echo "Keys: ";
print_r(array_keys($person));

echo "Values: ";
print_r(array_values($person));

// catatan pribadiku:
// berguna banget kalau kita cuma butuh data key-nya saja atau cuma butuh value-nya saja dari array associative.


echo PHP_EOL . "=== ARRAY MERGE ===" . PHP_EOL;
$array1 = ["Apel", "Mangga"];
$array2 = ["Jeruk", "Pisang"];
$gabungan = array_merge($array1, $array2);
print_r($gabungan);

// catatan pribadiku 
// array_merge = MENGGABUNGKAN dua atau lebih array menjadi satu array baru



echo PHP_EOL . "=== PENCARIAN (IN_ARRAY & ARRAY_SEARCH) ===" . PHP_EOL;
$buah = ["Apel", "Mangga", "Jeruk"];

var_dump(in_array("Mangga", $buah)); // bool(true)
var_dump(array_search("Jeruk", $buah)); // int(2)
   
   
   
// catatan pribadiku
// in_array = Mencek apakah sebuah nilai ADA di dalam array (return true/false)
// array_search = Mencari nilai di dalam array, dan mengembalikan KEY/INDEX nya.


echo PHP_EOL . "=== MANIPULASI AWAL & AKHIR ARRAY ===" . PHP_EOL;
$hewan = ["Kucing"];
array_push($hewan, "Anjing", "Ayam"); // nambah 2 di belakang
print_r($hewan);

array_pop($hewan); // Ayam dihapus
print_r($hewan);

array_unshift($hewan, "Sapi"); // nambah 1 di depan
print_r($hewan);

array_shift($hewan); // Sapi dihapus
print_r($hewan);

// catatan pribadiku: 
// array_push = menambah elemen di AKHIR array (sama seperti $array[] = value)
// array_pop = menghapus dan mengambil elemen TERAKHIR dari array
// array_unshift = menambah elemen di AWAL array
// array_shift = menghapus dan mengambil elemen PERTAMA dari array
// push & pop itu main di ekor (belakang)
// unshift & shift itu main di kepala (depan)

// bedanya print_r dengan var_dump :
// 1. print_r()  -> Hanya menampilkan struktur dan isi data saja (key dan value).
//                  Lebih rapi dan mudah dibaca oleh manusia.
//                  Tipe data tidak ditampilkan (misal boolean true terlihat seperti angka 1, false kosong).
//
// 2. var_dump() -> Menampilkan informasi SANGAT DETAIL.
//                  Selain menampilkan data, juga menampilkan tipe datanya (string, int, bool, dll)
//                  serta panjang dari sebuah string.
//                  Sangat berguna untuk proses DEBUGGING (mencari letak kesalahan/error).

echo PHP_EOL . "=== BEDA PRINT_R & VAR_DUMP ===" . PHP_EOL;

$contohData = [
    "nama" => "Zaky", 
    "umur" => 20, 
    "is_aktif" => true
];

echo "-- Pakai print_r: --" . PHP_EOL;
print_r($contohData);
// Output print_r tidak menampilkan tipe datanya, bahkan `true` hanya dicetak sebagai `1`.

echo PHP_EOL . "-- Pakai var_dump: --" . PHP_EOL;
var_dump($contohData);
// Output var_dump menampilkan array berisi 3 elemen,
// lalu masing-masing elemen diberi tahu tipe datanya (string, int, bool) dan ukurannya.