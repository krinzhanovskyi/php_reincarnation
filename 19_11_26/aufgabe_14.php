<?php

$dateiname = "eingaben.txt";
$datei = fopen($dateiname, "a");

if ($datei === false) {
    echo "Die Datei konnte nicht geöffnet werden.\n";
    exit;
}

$zeilenanzahl = 0;

while (true) {
    $naechstezeile = $zeilenanzahl + 1;
    $eingabe = readline("Zeile $naechstezeile [x]: ");

    if ($eingabe === "x") {
        break;
    }

    fwrite($datei, $eingabe . PHP_EOL);
    $zeilenanzahl++;

    echo "Zeile $zeilenanzahl geschrieben!\n\n";
}

fclose($datei);

echo "Es wurden $zeilenanzahl Zeilen in $dateiname geschrieben.\n";

