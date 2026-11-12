<?php
/**
 * @category Application
 * @package  Phpdev
 * @author   Alex Krizhanovskyi <alex.krizhanovskyi@gmail.com>
 */

$name_first = readline("Wie heisst die erste Person? ");
$height_first = (int)readline("Wie gross ist die erste Person? ");

$name_second = readline("Wie heisst die zweite Person? ");
$height_second = (int)readline("Wie gross ist die zweite Person? ");

if ($height_first > $height_second) {
    echo "$name_first ist grösser als $name_second.\n";
} elseif ($height_first < $height_second) {
    echo "$name_second ist grösser als $name_first.\n";
} else {
    echo "$name_first und $name_second sind gleich gross.\n";
}