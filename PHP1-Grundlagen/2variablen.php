<!DOCTYPE html>
<html lang="de">
<head>
    <title>Variablen mit PHP</title>
</head>
<body>
    <h1>Variablen mit PHP</h1>
    <?php
        //Ganzzahl (integer) definieren
        $alter = 47;
        echo "Ich bin ";
        echo $alter;
        echo "<br>";

        //Kommazahl (float) definieren und ausgeben
        $kontostand = 9.81;
        echo $kontostand;
        echo "<br>";

        //Text (string) einer Variable zuweisen und ausgeben
        $name = "Peter"
        ;//Ich heiße Peter
        echo "Ich heiße ";
        echo $name;
        echo "<br>";
        echo "Ich heiße $name";
        echo "<br>";
        echo 'Ich heiße $name';
        echo "<br>";
        echo "Ich bin " . $name; //Punkt verknüpft zwei Strings
        echo "<br>";

        //Ich habe Petes Stift.
        echo "Ich habe "; echo $name; echo "s Stift.";
        echo "<br>";
        echo "Ich habe $name"; echo "s Stift."; 
        echo "<br>";
        echo "Ich habe {$name}s Stift.";
        echo "<br>";
        echo "<br>";
        
        //Datentyp: Boolean (kurz: Bool)
        $wahr = true;
        echo $wahr;
        echo "<br>";
 /*       $true = true;
        echo $wahr;
        echo "<br>";
*/

        $falsch = false;
        echo ">".$falsch."<";
        echo "<br>";

        //null: "nichts" oder "undefiniert"
        $nichts = null;
        echo ">".$nichts."<";
        echo "<br>";

        //Eine Konstante definieren und verwenden
        define("datenbank", "jwe22222");
        echo datenbank;
        echo "<br>";
        //Neuere Schreibweise
        const datenbank2 = "jwe20";
        echo datenbank2;
    ?>
</body>
</html>