<?php

$a = 10;
echo $a . PHP_EOL;

// b adalah alias atau nama lain dari a 
$b = &$a;
echo $b . PHP_EOL;

$b = 20;
echo $b . PHP_EOL;

//  catatan pribadiku
//  jadi unutk memebuat alias itu pakai & berbeda dengan golang kalau pakai & itu merujuk ke lamat memori misal struct