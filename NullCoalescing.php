<?php

$data = ["nama" => "Ahmad Zaky Arifin"];

$a = isset($data["nama"]) ? $data["nama"] : "Tidak ada";

echo $a . PHP_EOL;

// atau bisa pakai null coalescing operator 

$b = $data["nama"] ?? "Tidak ada";

echo $b . PHP_EOL;


//  Null coalescing operator digunakan untuk menggantikan isset() dengan syntax yang lebih singkat