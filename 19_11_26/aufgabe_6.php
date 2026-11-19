<?php

$tt1 = readline("String 1: ");
$tt2 = readline("String 2: ");
$delimiter = readline("Trennzeichen: ");
$zwischenzeichen = readline("Zusammensetzungszeichen: ");
$format = readline("Format: ");

if ($delimiter == "") {
    echo "das Trennzeichen darf nicht leer bleiben \n";
    exit;
}

$t1 = explode($delimiter, $tt1);
$t2 = explode ($delimiter, $tt2);

$z1 = implode($zwischenzeichen, $t1);
$z2 = implode($zwischenzeichen, $t2);

$formatiert = sprintf($format, $z1, $z2);

echo "\nNach dem Trennen: \n";
echo "String 1: \n",
echo "String 2: \n";
echo "Formatierte Strings: $formatiert \n";