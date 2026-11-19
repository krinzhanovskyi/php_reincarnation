<?php 

$lila = readline("String: ");
$lilo = strtolower(readline("Gross / Kleinbuchstaben: "));

if ($lilo == "u") {
    $kaka = strtoupper($lila);
    $reg = "Gross";
} elseif ($lilo == "l") {
    $kaka = strtolower($lila);
    $reg = "Klein";
} else {
    echo "bitte geben sie u oder l.\n";
    exit;
}

$laaaa = strlen($kaka);

echo "String Laenge $laaaa in $reg: $kaka \n";
