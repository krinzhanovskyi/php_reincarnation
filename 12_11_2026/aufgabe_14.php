<?php
/**
 * @category Application
 * @package  Phpdev
 * @author   Alex Krizhanovskyi <alex.krizhanovskyi
 */

$Alter1 = (int)readline("Alter 1: ");
$Alter2 = (int)readline("Alter 2: ");
$Alter3 = (int)readline("Alter 3: ");
$Summe = $Alter1 + $Alter2 + $Alter3;

if ($Summe >= 100) {
    echo sprintf("Summe %d ist grösser als 100.\n", $Summe);
} else {
    echo sprintf("Summe %d ist kleiner als 100.\n", $Summe);
}