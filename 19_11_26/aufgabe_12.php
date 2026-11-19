<?php

$s = readline("Zu untersuchender String: ");
$p = readline("Anzuwendendes Muster: ");

$m = [];
$r = preg_match($p, $s, $m);

if ($r === false) {
    echo "\nDas Muster ist ungültig.\n";
} elseif ($r === 1) {
    $extract = implode("', '", $m);

    echo "\nString $s stimmt mit dem Muster $p überein, ";
    echo "und extrahierte: $extract\n";
} else {
    echo "\nString $s stimmt nicht mit dem Muster $p überein.\n";
}