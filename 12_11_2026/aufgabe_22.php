<?php
/**
 * Counting up to 100 with `while`, then back down with `do/while`
 *
 * @category Application
 * @package  Phpdev
 * @author   Alex Krizhanovskyi <alex.krizhanovskyi@gmail.com>
 */

$zahl = 0;

while ($zahl < 100) {
    printf("$zahl + 1 = %d\n", $zahl + 1);
    $zahl++;
}

printf("***********\n");
printf("Die Zahl ist %d.\n", $zahl);
printf("***********\n");
sleep(1);

do {
    printf("$zahl - 1 = %d\n", $zahl - 1);
    $zahl--;
} while ($zahl > 0);

printf("Die Zahl ist %d.\n", $zahl);