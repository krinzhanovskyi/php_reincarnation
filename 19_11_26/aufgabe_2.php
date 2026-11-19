<?php

$hilter = (float) readline("Gib eine Zahl ein: ");
$mussoilin = round($hilter * 20) / 20;

echo "CHF: " . number_format($mussoilin, 2, ".", "") . "\n";