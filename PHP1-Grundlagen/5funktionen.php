<!DOCTYPE html>
<html lang="de">
<head>
    <title>Funktion für Strings</title>
</head>
<body>
    <h1>Funktionen für Strings</h1>
<?php
    //String in Kleinbuchstaben umwandeln
    $text = "Äzlich Willkommen";
    echo mb_strtolower($text); //MB_MultiByte Methoden für Umlaute notwendig
    echo "<br>";

    $text = "   Herzlich Willkommen   ";
    echo trim($text, "n He");
    echo "<pre>";
    print_r( trim($text) );
    echo "</pre>";

    //HTML Tags aus einem String entfernen
    $text = "Das ist <strong>fett</strong> und <em>kursiv</em>.";
    echo strip_tags($text, "<strong>");
    echo "<br>";


    //Länge eines Strings zählen
    $text = "Übung";
    echo mb_strlen($text);
    echo "<br>";

    //Teil aus einem Text extrahieren
    $text = "Ich bin 43 Jahre alt.";
    echo substr($text, 8, 2);
    echo "<br>";
    echo $text[8] . $text[9];
    echo "<br>";

    //Zeilenumbrüche in <br> umwandeln
    $text = "Herzlich Willkomen
    im WIFI
    Salzburg.";
    echo nl2br($text);
    echo "<br>";

    ?>
</body>
</html>