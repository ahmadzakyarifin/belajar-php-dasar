<?php

$userRole = "guest";

// if statementbiasa
if ($userRole === "admin") {
    echo "Anda adalah admin" . PHP_EOL;
} else {
    echo "Anda bukan admin" . PHP_EOL;
}


// atau 

$hi = null;
if ($userRole === "admin") :
    $hi =  "Anda adalah admin";
else :
    $hi = "Anda bukan admin";
endif;

echo $hi . PHP_EOL;



// ternary operator 

$a = $userRole === "admin" ? "Anda adalah admin" : "Anda bukan admin";
echo $a . PHP_EOL;

// ternary operator lebih singkatnya dengan langsung echo

echo $userRole === "admin" ? "Anda adalah admin" : "Anda bukan admin" . PHP_EOL;


// catatan pribadiku
// pada dasarnya ternary operator itu cuman if statement yang di persingkat doang