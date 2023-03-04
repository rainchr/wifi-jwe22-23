<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Reguläre Ausdrücke in PHP</title>
</head>
<body>
    <h1>Reguläre Ausdrücke in PHP</h1>
    <?php
    //benutzername auf gültige Zeichen prüfen
    //diese dürfen nur a-z 0-9 beinhalten

    $benutzer = "mustermann9";
    //^...Start of string
    //$...End of Line (Schlusszeichen) wenn ich nicht mehr kommen darf
    if ( preg_match("/^[0-9a-z]+$/", $benutzer) )
    {
        echo "Benutzername ist zulässig.";
    } else {
        echo "Benutzername ist nicht zulässig.";
    }

    echo "<br>";
    echo "<br>";








    
    $benutzer1 = "mustermann.9";
    //^...Start of string
    //$...End of Line (Schlusszeichen) wenn ich nicht mehr kommen darf
    if ( preg_match("/[^0-9a-z\.]+$/", $benutzer1) )
    {
        echo "Benutzername ist zulässig.";
    } else {
        echo "Benutzername ist nicht zulässig.";
    }

    ?>
</body>
</html>