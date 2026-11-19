<?php

$zahl = (float) readline("Fliesskommazahl: ");
$komastellen = (int) readline("Dezimalstellen: ");

echo round($zahl, $komastellen) . "\n";
echo floor($zahl) . "\n";
echo ceil($zahl ) . "\n";