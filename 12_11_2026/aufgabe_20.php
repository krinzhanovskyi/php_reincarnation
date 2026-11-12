<?php
/**
 * Iterating over an array with `foreach`, with and without indexes
 *
 * @category Application
 * @package  Phpdev
 * @author   Alex Krizhanovskyi <alex.krizhanovskyi@gmail.com>
 */

$array = array('pipa', 'kaka', 'pisya');

foreach ($array as $value) {
    echo $value . "\n";
}

printf("///////// \n");

foreach ($array as $index => $value) {
    printf('%d:%s', $index, $value. "\n");
}