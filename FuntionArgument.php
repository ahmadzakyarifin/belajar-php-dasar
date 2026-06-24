<?php

function tambah( float $x = 0, float $y = 0): float {
    return $x + $y;
};


$hasil = tambah(1);
echo $hasil . PHP_EOL;

var_dump(tambah(10, 20));

var_dump(tambah("1","2"));
var_dump(tambah(true, false));
// var_dump(tambah([], []));    // error
// var_dump(tambah("",""));     // error


// catatan pribadiku 
//  jadi kita kalau kita masukin 1 aja maka akan tetep masuk ke parameter yang pertama seklipun niat kita mau ke parameter kedua maka yang terjadi akan error 
//  jadi akan error kalau kita engga set default unutk parameter ke 2

// nah dengan kasih type pada parameter nah jadi kita bisa masukkan type apapun contohnya 1 "1" true false yang akan di konversi ke float misalnya 
//  true = 1 , false = 0 , "1" = 1  dan unutk [] dan "" akan error karena engga bisa di konversi. 

function tambahData1( array $data)
{
    $total = null;
    foreach ($data as $value) {
        $total += $value;
    }
    //  pakai impolode fungsinya merubah array jadi string
    echo "Total : ". implode(", ", $data) ." = ".$total . PHP_EOL;
};


function tambahData2(...$data)
{
    $total = null;
    foreach ($data as $value) {
        $total += $value;
    }
    echo "Total : ". implode(", ", $data) ." = ".$total . PHP_EOL;
};

// jadi kalau pakai array data maka akan error karena engga sesuai type yang diminta 
$array = [11,12];
tambahData1([1,2,3,4,5,6,7,8,9,10]);
tambahData1($array);

// jadi lebih baik pakai ... selain bisa mengatasi parameter yang beupa array ( dengan syarat pakai ...  juga ) juga bisa unutk memasukkan banyak argumen
tambahData2(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
tambahData2(...[1,2,3,4,5,6,7,8,9,10]);
tambahData2(...$array);
