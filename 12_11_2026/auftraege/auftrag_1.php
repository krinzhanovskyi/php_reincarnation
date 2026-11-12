<?php
/**
 * @category Application
 * @package  Phpdev
 * @author   Alex Krizhanovskyi <alex.krizhanovskyi@gmail.com>
 * @copyright 2026 Alex Krizhanovskyi
 * @license  MIT
 * @version  1.0.0
 */

function istAntwortRichtig(int $antwort, int $loesung): bool
{
    return $antwort === $loesung;
}

function berechnungen(int $zahl1, int $zahl2, string $operator): float
{
    switch ($operator) {
        case '+':
            return $zahl1 + $zahl2;
        case '-':
            return $zahl1 - $zahl2;
        case '*':
            return $zahl1 * $zahl2;
        case '/':
            return $zahl1 / $zahl2;
        default:
            throw new InvalidArgumentException("Ungueltiger Operator");
    }
}

$name = readline("Wie heissen Sie? ");
$punkte = 0;

$operatoren = ['+', '-', '*', '/'];
$gesamtFragen = count($operatoren);
$fragen = $gesamtFragen;

printf("Hallo %s! Willkommen zum Rechentrainer.\n", $name);

while ($fragen > 0) {
    $zahl1 = 20;
    $zahl2 = 5;

    $index = count($operatoren) - $fragen;
    $operator = $operatoren[$index];
    $loesung = berechnungen($zahl1, $zahl2, $operator);

    printf("Was ist %d %s %d? ", $zahl1, $operator, $zahl2);
    $antwort = (int) readline();

    $richtig = istAntwortRichtig($antwort, $loesung);

    if ($richtig) {
        $punkte++;
        echo "Richtig!\n";
    } else {
        echo "Das ist falsch. Richtige Antwort: ";
        printf("%d\n", $loesung);
    }

    $fragen--;
    printf("Aktuelle Punkte: %d\n", $punkte);
}

if ($punkte === $gesamtFragen) {
    echo "Perfekt! Alle Antworten sind richtig.\n";
} elseif ($punkte >= 2 && $punkte < $gesamtFragen) {
    echo "Gut gemacht!\n";
} elseif ($punkte === 0 || $punkte === 1) {
    echo "Uebe noch ein bisschen weiter.\n";
}

printf("Ergebnis: %s hat %d von %d Punkten erreicht.\n", $name, $punkte, $gesamtFragen);