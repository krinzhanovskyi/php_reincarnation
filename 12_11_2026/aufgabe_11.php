<?php
/**
 * @category Application
 * @package  Phpdev
 * @author   Alex Krizhanovskyi <alex.krizhanovskyi@gmail.com>
 */
$Jahr = (int)readline("Jahrgang: ");
$AktuallesJahr = date("Y");

if ($Jahr > $AktuallesJahr) {
    echo "NO! \n";
} else {
    echo "YES! \n";
}