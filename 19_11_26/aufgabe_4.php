<?php 

$kishlak = readline("String: ");
$tolstiy = readline("Trim Zeichen: ");
$sasha = strtolower(readline("Trim Seite [a/e/b]: "));

$kukushka = (int) readline("Substring offset [0-9]: ");
$pivo = (int) readline("Substring Laenge[0-9]: ");

if ($sasha == "a") {
    $pisun = ltrim($kishlak, $tolstiy);
    echo "Am Anfang getrimmter String: $pisun\n";
} elseif ($sasha == "e") {
    $pisun = rtrim($kishlak, $tolstiy);
    echo "Am Ende getrimmter String: $pisun\n";
} elseif ($sasha == "b") {
    $pisun = trim($kishlak, $tolstiy);
    echo "Am Anfang und Ende getrimmter String: $pisun\n";
} else {
    "pisya\n";
    exit;
}

$allah = substr($pisun, $kukushka, $pivo);
echo "Extrahierter Substring: $allah";