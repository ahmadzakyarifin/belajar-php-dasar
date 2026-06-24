<?php

// for loop adalah perulangan yang paling umum digunakan

// for ($i = 1; $i <= 100; $i++) {
//     echo $i . PHP_EOL;
// }

// for ($i = 1; $i <= 100; $i += 2) : // incrementnya bisa diubah
//     echo $i . PHP_EOL;
// endfor; // bisa pakai : dan endfor; kalau mau pakai while atau for biasa. tapi saranin pakai { } aja ya 


// bisa aja kayak ini :

$count = 10;

// for (; $count <= 100;) {
//     echo $count . PHP_EOL;
//     $count++;
// }


// while loop adalah perulangan yang paling tidak umum digunakan 

// while ($count <= 100) : // kalau mau pakai : dan endwhile; kalau mau pakai while biasa. tapi saranin pakai { } aja ya
//     echo $count . PHP_EOL;
//     $count++;
// endwhile; 


//  do while loop adalah perulangan yang paling tidak umum digunakan 
//  dan akan mengeksekusi kode setidaknya sekali 

do {
    echo "sekali saja karena count itu 10 sedangkan kondisinya  <= 1" . PHP_EOL;
    $count++;
} while ($count <= 1);