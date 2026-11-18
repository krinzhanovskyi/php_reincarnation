<?php
/**
 * @category Application
 * @package  Phpdev
 * @author   Alex Krizhanovskyi <alex.krizhanovskyi@gmail.com>
 */
function zli(): string
{
    return "Hallo ZLI! \n";
}

for ($i = 0; $i < 10; $i++) {
    $text = zli();
    echo $text;
}