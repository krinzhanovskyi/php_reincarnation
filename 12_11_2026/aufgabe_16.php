<?php
/**
 * Selecting a module from a numbered menu with `switch`
 *
 * @category Application
 * @package  Phpdev
 * @author   Alex Krizhanovskyi <alex.krizhanovskyi@gmail.com>
 */
$m1 = "1 Modul 101\n";
$m2 = "2 Modul 102\n";
$m3 = "3 Modul 103\n";
$m4 = "4 Modul 104\n";
$m5 = "5 Modul 105\n";
$m6 = "6 Modul 106\n";
$m7 = "7 Modul 107\n";

$thema = readline("Welche Thema wählen Sie? ");

printf("Themenauswahl\n");
printf("***************\n");
printf("1. %s", $m1);
printf("2. %s", $m2);
printf("3. %s", $m3);
printf("4. %s", $m4);
printf("5. %s", $m5);
printf("6. %s", $m6);
printf("7. %s", $m7);

switch ($thema) {
    case "1":
        echo "Sie haben Modul 101 gewählt.\n";
        break;
    case "2":
        echo "Sie haben Modul 102 gewählt.\n";
        break;
    case "3":
        echo "Sie haben Modul 103 gewählt.\n";
        break;
    case "4":
        echo "Sie haben Modul 104 gewählt.\n";
        break;
    case "5":
        echo "Sie haben Modul 105 gewählt.\n";
        break;
    case "6":
        echo "Sie haben Modul 106 gewählt.\n";
        break;
    case "7":
        echo "Sie haben Modul 107 gewählt.\n";
        break;
    default:
        echo "Dieses Thema gibt es nicht.\n";
} 