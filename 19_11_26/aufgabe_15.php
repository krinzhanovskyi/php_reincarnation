<?php

$dateiName = "eingaben.txt";
$zeilen = file($dateiName);

echo "Die Datei $dateiName ist " . filesize($dateiName) . " Bytes gross ";
echo "und enthaelt folgenden Inhalt:\n\n";

foreach ($zeilen as $zeile) {
    echo $zeile;
}

$neueZeilen = [];
$zeilenAnzahl = 0;

while (true) {
    $eingabe = readline("Zeile " . ($zeilenAnzahl + 1) . " [x]: ");

    if ($eingabe === "x") {
        break;
    }

    $neueZeilen[] = $eingabe . PHP_EOL;
    $zeilenAnzahl++;

    echo "Zeile $zeilenAnzahl geschrieben!\n\n";
}

file_put_contents($dateiName, $neueZeilen, FILE_APPEND);

echo "Es wurden $zeilenAnzahl Zeilen an $dateiName angefügt.\n";