<?php
/**
 * @category Application
 * @package  Phpdev
 * @author   Alex Krizhanovskyi <alex.krizhanovskyi@gmail.com>
 */
function gibtext1(string $text1): string
{
    return $text1;
}

echo "String: ";
$eingabe = trim(fgets(STDIN));

for ($i = 1; $i <= 10; $i++) {
    $rueckgabe = gibtext($eingabe);
    printf("%s %2d\n", $rueckgabe, $i);
}