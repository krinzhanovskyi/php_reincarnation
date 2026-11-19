<?php

$vasya = abs((float) $zahl);
$sedmoi[] = $vasya;

for ($i = 1; $i <= 6; $i++) {
    $zahl = trim(readline("Zahl $i [x = Abbruch]: "));
    
    if (strtolower($zahl) === "x") {
        break;
    }
}

if (count($sedmoi) > 0) {
    echo "\nZahlen: " . implode(", ", $sedmoi) . "\n";
    echo "Groesste Zahl: " . max($sedmoi) . "\n";
    echo "Kleinste Zahl: " . min($sedmoi) . "\n";
} else {
    echo "Nichts eingegeben.\n";
}