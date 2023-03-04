<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schleifen</title>
</head>
<body>
    <h1>Schleifen</h1>
    <?php
    //Limitierte Ausführungszeit auf 1 Sekunde
    set_time_limit(1);

    //1-10 ausgeben mit einer while-Schleife
    $zahl = 1;
    while ($zahl <= 10 )
    {
        echo $zahl++ . " ";
    }
    echo "<br>";

    //Array der Reihe nach ausgeben mit foreach
    $staedte = array("Bregenz", "Innsbruck", "Salzburg", "Klagenfurt",
            "Linz", "Graz", "St. Pölten", "Wien", "Eisenstadt");
    asort($staedte);
    foreach($staedte as $index => $stadt) {
        echo $index . ": ";
        echo $stadt;
        echo "<br>";
    }
    echo "<br>";

    ?>

</body>
</html>