<?php
/**
 * @category Application
 * @package  Phpdev
 * @author   Alex Krizhanovskyi <alex.krizhanovskyi@gmail.com>
 */
$name = readline("Wie ist dein Name? ");

switch ($name) {
    case "Alex":
        echo "Hallo Alex, willkommen zurück!\n";
        break;
    case "Maria":
        echo "Hallo Maria, schön dich zu sehen!\n";
        break;
    default:
        echo "Hallo $name, schön dich kennenzulernen!\n";
} 