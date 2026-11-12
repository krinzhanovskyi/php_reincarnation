<?php
/**
 * @category Application
 * @package  Phpdev
 * @author   Alex Krizhanovskyi <alex.krizhanovskyi@gmail.com>
 */
$wahl = strtoupper(readline("Auswahl: "));

switch ($wahl) {
    case "A":
        echo ("Sie haben Ändern gewählt.\n");
        break;
    case "B":
        echo ("Sie haben Beenden gewählt.\n");
        break;
    case "D":
        echo ("Sie haben Drucken gewählt.\n");
        break;
    case "E":
        echo ("Sie haben Eingeben gewählt.\n");
        break;
    case "L":
        echo ("Sie haben Löschen gewählt.\n");
        break;
    default:
        echo ("Ungültige Auswahl.\n");
}