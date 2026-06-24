<?php

$nilai = 80;


function cekNilai( float $nilai) : string {
   if ($nilai >= 80) {
    return "A";
    } else {
    return "B";
}
};

var_dump(cekNilai($nilai));


