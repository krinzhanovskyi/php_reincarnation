<?php

$s = readline("Zu untersuchender String: ");
$p = readline("Anzuwendendes Muster: ");
$replace = readline("Übereinstimmung ersetzen: ");

$result = preg_replace($p, $replace, $s);

if ($result === null) {
    echo "\nDas Muster ist ungültig.\n";
} else {
    echo "\nVeraenderter String: $result\n";
}