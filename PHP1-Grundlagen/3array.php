<!DOCTYPE html>
<html lang="de">
<head>
    <title>Arrays in PHP</title>
</head>
<body>
<h1>Arrays in PHP</h1>
    <?php 
    $namen = array("Katharina", "Jonathan", "Julia", "Peter");
    //Julia und Katharina
    echo $namen[2] . " und " . $namen[0];
    echo "<br>"; 
    echo "{$namen[2]} und {$namen[0]}";
    echo "<br>";

    echo "<pre>";
    print_r($namen);
    echo "</pre>";

    //Wert im Nachhinein an Array anhängen.
    $namen[] = "Mario";

    echo "<pre>";
    print_r($namen);
    echo "</pre>";

    //Index als Variable
    $x = 3;
    echo $namen[$x + 1];
    echo "<br>";

    //Assoziative Arrays definieren (Index ist ein Text)
    $personen = array(
        "name" => "Markus",        
        "alter" => 63,        
        "ort" => "Salzburg"
    );

    //Ausgabe: Markus (63) aus Salzburg
    echo $personen["name"];
    echo " (";
    echo $personen["alter"];
    echo ") ";
    echo " aus Salzburg";
    echo "<br>";
    echo $personen["name"] .  " (" . $personen["alter"] . ")  aus Salzburg";
    echo "<br>";

    //Im Nachhinein einen Wert dem Array anfügen.
    $personen["guthaben"] = 180;

    //Inhalt aus Array darstellen (zu debugging-zwecke!!!)
    echo "<pre>";
    print_r($personen);
    echo "</pre>";

    //Mehrdimensionale Array (verschachtelt)
    $personenListe = array(
        array(
            "name" => "Herbert",
            "alter" => 33,
            "ort" => "Linz"
        ),
        array(
            "name" => "Sarah",
            "alter" => 27
        ),
        $personen
    );

    //Linz
    echo $personenListe[0]["ort"];
    echo "<br>";
    //Sarah
    echo $personenListe[1]["name"];
    echo "<br>";
    

    echo "<pre>";
    print_r($personenListe);
    echo "</pre>";

    //Ändern von Array Werten
    $personenListe[0]["alter"] = 35;
    echo $personenListe[0]["alter"];
    echo "<br>";


    $zahl = 3;
    echo $zahl;
    echo "<br>";    
    ++$zahl; // $zahl++
    $zahl = $zahl + 1;
    //echo $zahl1;
    echo "<br>";
    echo $zahl;
    echo "<br>"; 

    ?>











<br>
</body>
</html>