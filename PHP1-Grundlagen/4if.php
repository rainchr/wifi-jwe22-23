<!DOCTYPE html>
<html lang="de">
<head>
    <title>if-Abfrage</title>
</head>
<body>
    <h1>if-Abfrage</h1>

    <?php
    // 0 - 5: Schlaf gut!
    // 6 - 9: Guten Morgen!
    // 12 / 18: Mahlzeit
    // 19 - 23: Gute Nacht
    // sonst: Hallo.

    $stunde = date("G"); //Werte: 0 - 23

    if ($stunde <= 5) {
        echo "Schlaf gut!";
    } else if ( $stunde >= 6 && $stunde <= 9 ) {
        echo "Guten Morgen!";
    } else if ( $stunde == 12 || $stunde == 18 ) {
        echo "Mahlzeit";
    } else if ( $stunde >= 19) {
        echo "Gute Nacht!";
    } else {
        echo "Hallo";
    }

    ?>
    
</body>
</html>