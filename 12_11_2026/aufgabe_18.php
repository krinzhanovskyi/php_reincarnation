<?php
/**
 * Counting from 0 to 100 with `while` and a one-second delay
 *
 * @category Application
 * @package  Phpdev
 * @author   Alex Krizhanovskyi <alex.krizhanovskyi@gmail.com>
 */

$zahl = 0;
while ($zahl < 100) {
    printf("$zahl + 1 = %d\n", $zahl + 1);
    sleep(1);
    $zahl++;
}
printf("Die Zahl ist %d.\n", $zahl);
