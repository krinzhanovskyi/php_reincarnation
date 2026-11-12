<?php
/**
 * Checking whether one number is divisible by another
 *
 * @category Application
 * @package  Phpdev
 * @author   Alex Krizhanovskyi <alex.krizhanovskyi@gmail.com>
 */
$zahl1 = (int)readline("Wie lautet die erste Zahl? ");
$zahl2 = (int)readline("Wie lautet die zweite Zahl? ");

$resultat = $zahl1 % $zahl2;

$zahl_ok = sprintf(
    "%d ist ohne Rest durch %d teilbar und ergibt den Wert %d.\n",
    $zahl1,
    $zahl2,
    ($zahl1 / $zahl2)
);
$zahl_nicht_ok = sprintf(
    "%d ist nicht ohne Rest durch %d teilbar.\n",
    $zahl1,
    $zahl2,);
$text = sprintf(
    "Die erste Zahl ist %d und die zweite Zahl ist %d. \n",
    $zahl1,
    $zahl2
);

echo $text;

if ($resultat == 0) {
    echo $zahl_ok;
}
else {
    echo $zahl_nicht_ok;
}