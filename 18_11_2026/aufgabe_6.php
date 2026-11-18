<?php
/**
 * @category Application
 * @package  Phpdev
 * @author   Alex Krizhanovskyi <alex.krizhanovskyi@gmail.com>
 */

$a = readline("Zahl 1: ");
$b = readline("Zahl 2: ");
function multipliziere($a, $b)
{
    return $a * $b;
}

for ($i = 0; $i < 10; $i++) {
    echo multipliziere($a, $b) . "\n";
}