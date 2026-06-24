<?php

function app()
{
    echo "coba saja";
}

$copy = "app";
$copy();
echo "\n";

// ================

function filter(string $nama, $filter)
{
    $ubah = $filter($nama);
    echo $ubah . PHP_EOL;
}

function sempel($nama)
{
    echo "Haii $nama" . PHP_EOL;
};

filter("ahmad", "strtoupper");
filter("AHMAD", "strtolower");
filter("AHMAD", "sempel");