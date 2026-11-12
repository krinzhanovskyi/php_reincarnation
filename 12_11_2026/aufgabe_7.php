<?php
/**
 * @category Application
 * @package  Phpdev
 * @author   Alex Krizhanovskyi <alex.krizhanovskyi@gmail.com>
 */
$kaka = function () {
    return readline("Was gehts? ");
};
$pupa = function () {
    return readline("Wie heisst du? ");
};

if ($kaka() === "gut") {
    echo "Schön zu hören, dass es dir gut geht, " . $pupa() . "!\n";
} else {
    echo "alles wird cool, das Leben ist schwierig, " . $pupa() . ".\n";
}
