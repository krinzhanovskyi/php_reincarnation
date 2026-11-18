<?php
/**
 * @category Application
 * @package  Phpdev
 * @author   Alex Krizhanovskyi <alex.krizhanovskyi@gmail.com>
 */
function zli(string $text)
{
    echo $text;
}

for ($i = 0; $i < 10; $i++) {
    zli("zli \n");
}