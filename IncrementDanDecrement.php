<?php

$a = 5;
$b = $a++;

// sama kayak 
// $a = 5;
// $b = $a;
//  $a += 1;

var_dump($a);
var_dump($b);

$c = ++$a;

//  sama kayak
// $a = 6;
// $a += 1;
// $c = $a;

var_dump($c);

//  jadi saya lihat itu $a  atau  ++  yang di tulis awal awal
//  atau ++ baru $a
//  jadi di eksekusi yang depan dulu
//  jadi kalau ++ maka di tambahain dulu ke $a baru di masukin ke $c
//  kalau $a dulu maka di masukin ke $b , baru setelah $a kan ++ maka di tambah $a +=1