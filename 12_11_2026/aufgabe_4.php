<?php
/**
 * Calculating age from year of birth
 *
 * @category Application
 * @package  Phpdev
 * @author   Alex Krizhanovskyi <alex.krizhanovskyi@gmail.com>
 */
$birthYear = (int)readline("In welchem Jahr bist du geboren? ");

$age = (int)date("Y") - $birthYear;

$text = "Du bist %d Jahre alt.";
printf($text . "\n", $age);