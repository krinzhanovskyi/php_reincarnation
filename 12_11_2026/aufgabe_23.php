<?php
/**
 * Adding the numbers from 1 to 100
 *
 * @category Application
 * @package  Phpdev
 * @author   Alex Krizhanovskyi <alex.krizhanovskyi@gmail.com>
 */

$zahl = 1;
$summe = 0;

for ($i = 1; $i <= 100; $i++) {
    printf("$zahl\n");
    $summe += $zahl ;
    $zahl++;
}
printf("Die Summe ist %d.\n", $summe);