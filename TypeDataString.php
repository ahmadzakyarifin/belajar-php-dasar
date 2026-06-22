<?php

echo 'Nama : ';
echo 'Ahmad Zaky Arifin';
echo "\n";

echo "Nama : ";
echo "Ahmad\t Zaky\t Arifin\n";

// jadi kalau pakai "" itu bisa pakai \t, \n . jadi kalau '' engga bisa.

echo <<<bebas

Nama : Ahmad Zaky Arifin
Alamat : Jl. Raya No. 123
Kota : Jakarta

bebas;

//  Heredoc adalah cara membuat string multi-baris tanpa perlu menambahkan karakter \n di setiap akhir baris.
//  jadi bisa pakai bebas, atau lainnnya . jadi syaratnya itu harus diawali dan diakhiri dengan identifier yang sama.


echo <<<'bebas'

Nama : Kayla Nasiaturrohmah
Alamat : Jl. Raya No. 123
Kota : Jakarta

bebas;

// Nowdoc adalah sama seperti Heredoc
// bedanya, jika Heredoc bisa mengekspansi variabel, Nowdoc tidak bisa.