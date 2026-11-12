<?php
/**
 * @category Application
 * @package  Phpdev
 * @author   Alex Krizhanovskyi <alex.krizhanovskyi@gmail.com>
 */

$zahl = 1;
$sum = 0;

for ($i = 1; $i <= 20; $i++) {
    printf("$zahl ");
    $sum += $zahl ;
    $zahl++;
}
printf("\n");
printf("Die Summe ist %d.\n", $sum);