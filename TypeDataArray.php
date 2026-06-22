<?php

$value = array(1, 2, 3.5);
var_dump($value);

$data = ["John", "Doe", 30];
var_dump($data);

$campuran = ["John", 30, 3.5, true, null, ["dani", "budi",10]];
var_dump($campuran);

// array adalah tipe data yang digunakan untuk menyimpan beberapa nilai dalam satu variabel
// array dapat menyimpan berbagai tipe data, seperti integer, float, string, dan bahkan array lainnya

// Mengakses elemen array
echo "Data 1: ";
echo $data[0];
echo "\n";

// Mengubah elemen array
echo "Data 1 setelah diubah: ";
$data[0] = "Jane";
echo $data[0];
echo "\n";

// Menampilkan semua elemen array serta hapus elemen
echo "Semua Data: ";
var_dump($data);
unset($data[0]);
echo "Data 1 setelah dihapus: ";
var_dump($data);
echo "\n";

//  Kalau pakai unset indexnya ikut ke hapus

// Menambah elemen array
$data[] = "Smith";
echo "Data 1 setelah ditambah: ";
var_dump($data);
echo "\n";


// Menghitung jumlah elemen array
var_dump(count($data));





// =============================
// kita bisa buat map pakai array
$mahasiswa = [
    "nama" => "John",
    "umur" => 20,
    "jurusan" => "Teknik Informatika"
];

$kucing = array(
    "nama" => "Kitty",
    "umur" => 2,
    "ras" => "Persia"
);

$budi = [
    "nama" => "budi",
    "umur" => 21,
    "address" => array(
        "street" => "Jl. Kebon Jeruk",
        "city" => "Jakarta",
        "postal_code" => "11530"
    )
];

var_dump($mahasiswa);
var_dump($kucing);
var_dump($budi);

var_dump($kucing["nama"]);
var_dump($kucing["umur"]);
var_dump($kucing["ras"]);

echo $mahasiswa["nama"];
echo "\n";
echo $mahasiswa["umur"];
echo "\n";
echo $mahasiswa["jurusan"];
echo "\n";

var_dump($budi["nama"]);
var_dump($budi["umur"]);
var_dump($budi["address"]["street"]);
var_dump($budi["address"]["city"]);
var_dump($budi["address"]["postal_code"]);