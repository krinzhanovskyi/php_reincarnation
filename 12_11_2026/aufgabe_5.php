<?php
/**
 * @category Application
 * @package  Phpdev
 * @author   Alex Krizhanovskyi <alex.krizhanovskyi@gmail.com>
 */
$birthYear = (int)readline("In welchem Jahr bist du geboren? ");
$age = (int)date("Y") - $birthYear;
$pensinionAge = 65;
$pension_werden = $pensinionAge - $age;
if ($Age >= $pensinionAge) {
    echo "Du bist schon pensioniert. Du bist $age Jahre alt.";
} else {
    echo "Du arbeitest noch? $pension_werden Jahre bis Du pensioniert wirst.";
}