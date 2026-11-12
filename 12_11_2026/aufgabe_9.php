<?php
/**
 * @category Application
 * @package  Phpdev
 * @author   Alex Krizhanovskyi <alex.krizhanovskyi@gmail.com>
 */
$Alter = (int)readline("Wie alt bist du? ");
$Volljährig = 18;

if ($Alter >= $Volljährig) {
    echo "Du bist volljährig. \n";
} else {
    echo "Du bist noch minderjährig.\n";
}