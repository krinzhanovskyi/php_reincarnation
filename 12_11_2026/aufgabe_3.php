<?php
/**
 * @category Application
 * @package  Phpdev
 * @author   Alex Krizhanovskyi <alex.krizhanovskyi@gmail.com>
 */
$name = readline("Wie heisst du? ");
$wohnort = readline("Wo wohnst du? ");
$jahr = readline("In welchem Jahr bist du geboren? ");
printf("Hallo %s, du wohnst in %s und bist im Jahr %d geboren.", $name, $wohnort, $jahr);