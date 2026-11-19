<?php

$s = readline("Zu untersuchender String: ");
$p = readline("Anzuwendendes Muster: ");

$r = preg_match($p, $s);

if ($r === false) {
    echo "Das Muster ist ungültig.\n";
} elseif ($r === 1) {
    echo "\nString '$s' stimmt mit dem Muster '$p' überein.\n";
} else {
    echo "\nString '$s' stimmt nicht mit dem Muster '$p' überein.\n";
}