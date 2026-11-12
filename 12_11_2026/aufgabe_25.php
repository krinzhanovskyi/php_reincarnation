<?php

/**
 * @category Application
 * @package  Phpdev
 * @author   Alex Krizhanovskyi <alex.krizhanovskyi@gmail.com>
 */

$zahl = 1;
$summe = 0;

for ($zahl = 1; $zahl <= 30; $zahl++) {
    printf("$zahl\n");
    if ($zahl % 3 == 0) {
        $summe += $zahl;
    }
}
printf("Die Summe ist %d.\n", $summe);