<?php

function verknuepfe(string $text1, string $zusatz): string
{
    return $text1 . $zusatz; 
}

$text = "Hallo ZLI";

for ($i = 1; $i < 10; $i++) {
    $text .= verknuepfe($text, ' ' . $i);
    echo $text . PHP_EOL;
}