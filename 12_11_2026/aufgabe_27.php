<?php
/**
 * Repeatedly asking for a number above 100, counting attempts, and summing inputs
 *
 * @category Application
 * @package  Phpdev
 * @author   Alex Krizhanovskyi <alex.krizhanovskyi@gmail.com>
 */

$i = 1;
$sum = 0;
$try = 1;

while ($i <= 100) {
   $i = (int)readline("Gib eine Zahl ein grösser als 100: ");
    $sum += $i;
    $try++;
    if ($i < 100) {
        printf("Dieser zahl ist kleiner als 100.\n");;
        printf("Neuer Versuch: %d\n", $try);
    } else {
    } 
}

printf("Die Summe ist %d.\n", $sum);