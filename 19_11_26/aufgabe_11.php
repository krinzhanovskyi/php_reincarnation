<?php

$s = readline("Zu untersuchender String: ");
$p = readline("Anzuwendendes Muster: ");
$m = readline("Anzuwendender Modifikator: ");

$patternWithModifier = $s . $m;
$r = preg_match($patternWithModifier, $s);

if ($r === false) {
    echo "\nDas Muster oder der Modifikator ist ungültig.\n";
} elseif ($r === 1) {
    echo "\nString '$s' stimmt mit dem Muster '$patternWithModifier' überein.\n";
} else {
    echo "\nString '$s' stimmt nicht mit dem Muster '$patternWithModifier' überein.\n";
}