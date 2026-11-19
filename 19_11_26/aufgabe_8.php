<?php

$z = [];

for ($i = 1; $i <= 6; $i++) {
    $z1 = (int) readline("Zahl $i: ");

    if ($i % 2 === 1) {
        array_push($z, $z1);
    } else {
        array_unshift($z, $z1);
    }
}

echo "\nArray enthaelt: " . implode(",", $z) . "\n";

$l = array_pop($z);

echo "\nLetztes Element entfernt: $l\n";
echo "Array enthaelt jetzt: " . implode(",", $z) . "\n";

$e = array_shift($z);

echo "\nErstes Element entfernt: $e\n";
echo "Array enthaelt jetzt: " . implode(",", $z) . "\n";