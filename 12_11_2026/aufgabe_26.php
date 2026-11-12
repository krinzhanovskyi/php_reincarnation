<?php
/**
 * @category Application
 * @package  Phpdev
 * @author   Alex Krizhanovskyi <alex.krizhanovskyi@gmail.com>
 */

$zahl = 0;
$summe = 0;

while ($zahl <= 100) {
    $zahl = (int)readline("Gib eine Zahl ein grösser als 100: ");
    $summe += $zahl;
    if ($zahl > 100) {
        printf("Die Zahl ist %d grösser als 100.\n", $zahl);
        break;
    } else {
    }
}
    
printf("Die Summe ist %d.\n", $summe);