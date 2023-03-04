<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Eigene Funktionen</title>
</head>
<body>
<h1>Eigene Funktionen</h1>
    <?php
    //Funktion zum Umrechnen von °C in °F
    //°F = °C * 1.8 + 32

    
    function celsius_in_fahrenheit($c, $b = null) {
        $fahrenheit = $c * 1.8 + 32;
        echo $b;
        return $fahrenheit;
    }

    //15°C
    echo celsius_in_fahrenheit(15, 45);
    echo "<br>";
    echo celsius_in_fahrenheit(20);
    echo "<br>";
    echo celsius_in_fahrenheit(25);
    echo "<br>";
    echo celsius_in_fahrenheit(36);
    echo "<br>";
    echo celsius_in_fahrenheit(0);
    echo "<br>";
    echo celsius_in_fahrenheit(5);
    echo "<br>";
    echo celsius_in_fahrenheit(110);
    echo "<br>";


    // Datum neu formatieren
function de_datum($datum_falsch){
    $year = substr($datum_falsch, 2, 2);
    $month = substr($datum_falsch, 5, 2);
    $day = substr($datum_falsch, 8, 2);
    return $day . "." . $month . "." . $year;
    //return "$day.$month.$year";
}

    $datum_mysql = "2022-04-17";
    //17.04.22
    echo de_datum($datum_mysql);
    echo "<br>";

    $time = strtotime($datum_mysql);
    echo date("d.m.y", $time);
    echo "<br>";

    //Datum formatieren: 2. Variante 
    //17.04.2022
    function de_datum2($datum_falsch){
        //explode
        $teile = explode("-", $datum_falsch);
        return $teile[2] . "." . $teile[1]. "." . $teile[0];
    }

    echo de_datum2($datum_mysql);
    echo "<br>";

    //Text nach 10 Zeichen abschneiden und "..." anhängen
    function text_abschneiden($text_lang, $laenge = 10) {
        $textLaenge = mb_strlen($text_lang);
        if ( $textLaenge > $laenge) {
            return substr($text_lang, 0, $laenge) . "\"...\"";
        } else {
            return $text_lang;
        }

        return "";
    }

    $text = "Ä23456789012345";
    echo text_abschneiden($text);
    echo "<br>";
    echo text_abschneiden($text, 5);
    echo "<br>";

    ?>
</body>
</html>