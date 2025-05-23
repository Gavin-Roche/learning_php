<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Get functionality</title>
    </head>

    <body>
    <h3>Simple Table</h3>
    <?php
    echo "<table border='1'>";
    for($i = 2; $i < 5; $i++){
        echo "<tr>";
        for($j = 0; $j < 3; $j++)
            echo "<td>$i</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
    </body>
</html>