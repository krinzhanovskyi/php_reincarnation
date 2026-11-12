<?php
/**
 * Checking whether a number is even or odd
 *
 * @category Application
 * @package  Phpdev
 * @author   Alex Krizhanovskyi <alex.krizhanovskyi@gmail.com>
 */
$zahl = (int)readline("Wie lautet die Zahl? ");
if ($zahl % 2 == 0) {
    echo "Die Zahl ist gerade.\n";
} else {
    echo "Die Zahl ist ungerade.\n";
}