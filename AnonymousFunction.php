<?php
$a = function () {
    echo "Hello b" . PHP_EOL;
};

$a();

// catatan pribadiku 
// Anonymous function = function tanpa nama dan biasa di simpan di variabel 

$pertama = "ahmad";
$kedua = "budi";

$a = function () use ($pertama, $kedua) {
    echo "$pertama $kedua" . PHP_EOL;
};

$pertama = "ahmad";
$kedua = "sugeng";

$a();

//  jadi kalau kita memasukkan function kedalam function lain kita tidak bisa mengakses variable yang ada di dalam function lain 
//  jadi harus pakai use
// dan jika kita ubah linaki dari variable pertama dan kedua maka engga akan berpengaruh , karana udah di masukin nilia pertama kali nya