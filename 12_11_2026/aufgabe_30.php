<?php
/**
 * @category Application
 * @package  Phpdev
 * @author   Alex Krizhanovskyi <alex.krizhanovskyi@gmail.com>
 */

$list = ["blau", "gruen", "rot", "gelb", "violett"];
$zahl = 0;

echo "Ich sehe: \n";

foreach ($list as $farbe) {
    $zahl++;
    echo "$zahl Murmeln in der Farbe $farbe\n";
}