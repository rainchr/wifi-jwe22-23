<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>for-Schleife</title>
</head>
<body>
    <h1>Schleifen</h1>
    <?php

    //1 - 10 in einer HTML Tabelle darstellen.
    echo "<table border='1'>";
    for ($zeile=1; $zeile <= 10; $zeile++) { 
        //6te Zeile wird übersprungen
        if ($zeile == 6) continue;
        /*
            if ($zeile == 6)
            {
                continue;
            }
        */


        echo "<tr>";
            for ($spalte=1; $spalte <= 10; $spalte++) { 
                echo "<td>";
                //jeder durch 7 teilbare Wert wird nicht ausgegeben
                if ( $spalte * $zeile % 7 != 0) {
                    echo $spalte * $zeile;
                }
                echo "</td>";
            }
        echo "</tr>";

    }
    echo "</table>";



    ?>
<br><br>

<table border="1">
    <tr>
        <td>1</td>
        <td>2</td>
        <td>3</td>
        <td>...</td>
    </tr>
    <tr>
        <td>2</td>
        <td>4</td>
        <td>6</td>
        <td>...</td>
    </tr>
    <tr>
        <td>3</td>
        <td>6</td>
        <td>9</td>
        <td>...</td>
    </tr>
</table>

</body>
</html>