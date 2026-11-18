<?php
/**
 * @category Application
 * @package  Phpdev
 * @author   Alex Krizhanovskyi <alex.krizhanovskyi@gmail.com>
 */
function gibtext(string $text): string
{
    return $text;
}

echo "String: ";
$eingabe = trim(fgets(STDIN));

for ($i = 1; $i <= 10; $i++) {
    $rueckgabe = gibtext($eingabe);
    printf("%s %2d\n", $rueckgabe, $i);
}