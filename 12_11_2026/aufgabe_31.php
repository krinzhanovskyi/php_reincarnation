<?php
/**
 * @category Application
 * @package  Phpdev
 * @author   Alex Krizhanovskyi <alex.krizhanovskyi@gmail.com>
 */

$bludo = [];
$bludo_name = '1';

while ($bludo_name !== '') {
    $bludo_name = readline('Schreiben Sie bitte ihre Lieblingsessen: ');

    if ($bludo_name !== '') {
        $bludo[] = $bludo_name;
    }
}

foreach ($bludo as $eda) {
    echo $eda . PHP_EOL;
}