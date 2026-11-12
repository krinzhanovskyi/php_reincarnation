<?php
/**
 * @category Application
 * @package  Phpdev
 * @author   Alex Krizhanovskyi <alex.krizhanovskyi@gmail.com>
 */
$note_1 = (int)readline("Wie lautet die erste Note? ");
$note_2 = (int)readline("Wie lautet die zweite Note? ");
$note_3 = (int)readline("Wie lautet die dritte Note? ");
$durchschnitt = ($note_1 + $note_2 + $note_3) / 3;
$text = sprintf(
    "Der Durchschnitt der Noten %.1f, %.1f und %.1f ist %.1f.\n",
    $note_1,
    $note_2,
    $note_3,
    $durchschnitt
);

echo $text;