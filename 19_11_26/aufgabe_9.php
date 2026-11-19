<?php

$z = [];

for ($i = 1; $i <= 5; $i++) {
    $z[] = (int) readline("Zahl $i: ");
}

$anz = count($z);
$s = array_sum($z);

shuffle($z);

$zufallsIndex = array_rand($z);
$zufallsZahl = $z[$zufallsIndex];

echo "\nDas Array enthaelt $anz Elemente.\n";
echo "Die Summe aller Zahlen im Array ist: $s\n";
echo "Die gemischten Zahlen: ";
foreach ($z as $index => $z2) {
    if ($index > 0) {
        echo ",";
    }
    echo $z2;
}

echo "\nEine zufaellige Zahl: $zufallsZahl\n";