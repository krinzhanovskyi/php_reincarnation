<?php

/**
 * Repeating a menu until the user chooses to exit
 *
 * @category Application
 * @package  Phpdev
 * @author   Alex Krizhanovskyi <alex.krizhanovskyi@gmail.com>
 */

$menu = [
    1 => 'Vormittag',
    2 => 'Nachmittag',
    3 => 'Abend',
    0 => 'Beenden',
];

do {
    echo "Menue\n";
    echo "*****\n";
    echo "Bitte wählen Sie eine Option:\n";
    foreach ($menu as $key => $value) {
        echo "$key. $value\n";
    }
    $wahl = (int)readline("Ihre Wahl: ");
    if (array_key_exists($wahl, $menu)) {
        echo "Sie haben gewählt: " . $menu[$wahl] . "\n";
    } else {
        echo "Ungültige Wahl. Bitte versuchen Sie es erneut.\n";
    }
} while ($wahl !== 0);

