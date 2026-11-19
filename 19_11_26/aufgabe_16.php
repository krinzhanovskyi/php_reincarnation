<?php

$verzeichnis = "."; 
$eintraege = scandir($verzeichnis);
$dateienAnzahl = 0;

echo "Eintraege im Verzeichnis $verzeichnis:\n\n";

foreach ($eintraege as $eintrag) {
    echo $eintrag . "\n";

    if (is_file($verzeichnis . "/" . $eintrag)) {
        $dateienAnzahl++;
    }
}

echo "\nEs wurden $dateienAnzahl regulaere Dateien im Verzeichnis $verzeichnis gefunden.\n";