<?php
/**
 * Greeting by name and age, with different wording for adults and minors
 *
 * @category Application
 * @package  Phpdev
 * @author   Alex Krizhanovskyi <alex.krizhanovskyi@gmail.com>
 */
$alter = (int)readline("Wie alt bist du? ");
$volljährig = 18;
$alter_anrede = sprintf("Alter: %d.\n", $alter);

$name = readline("Wie heisst du? ");
$name_anrede = sprintf("Name: %s.\n", $name);

$volljährig_anrede = "Sie heissen %s, und Sie sind %d. Jahre alt. \n";
$minderjährig_anrede = "Du heisst %s, und bist %d Jahre alt.\n";

if ($alter >= $volljährig) {
    echo sprintf($name_anrede."".$alter_anrede."".$volljährig_anrede, $name, $alter);
} else {
    echo sprintf($name_anrede."".$alter_anrede."".$minderjährig_anrede, $name, $alter);
}
