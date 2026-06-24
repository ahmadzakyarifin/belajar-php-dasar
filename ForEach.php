<?php

$data = [1, 2, 3];

for ($i = 0; $i < count($data); $i++) {
    echo $data[$i] . PHP_EOL;
};

// pakai foreach lebih singkat 

foreach ($data as $value) : 
    echo $value . PHP_EOL;
endforeach; 

$kucing = [
    "kucing 1" => "oyen",
    "kucing 2" => "milky",
    "kucing 3" => "boba"
];

foreach ($kucing as $value) : 
    echo $value . PHP_EOL;
endforeach; 

foreach ($kucing as $key => $value) : 
    echo $key . " : " . $value . PHP_EOL;
endforeach; 