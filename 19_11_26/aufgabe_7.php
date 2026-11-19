<?php

$z1 = explode(",", readline("zahlen 1: "));
$z2 = explode(",", readline("zahlen 2: "));

foreach ($z1 as &$z) {
    $z = (int) trim($z);
}

unset($z);

foreach ($z2 as &$z) {
    $z = (int) trim($z);
}

unset($z);

$zusammen = array_intersect($z1, $z2);

$nur_1 = array_merge(
    array_diff($z1, $z2),
    array_diff($z2, $z1)
);

$alles = array_merge($z1, $z2);
$noDupl = array_unique($alles);

echo "\n In beiden Arrays vorkommen Zahlen: "
    . implode(",", $zusammen) . "\n";

echo "\n Nur in einem Array vormmende Zahlen: "
    . implode(",", $nur_1) . "\n";

echo "Alle Zahlen azs beiden: "
    . implode(",", $noDupl) .  "\n";