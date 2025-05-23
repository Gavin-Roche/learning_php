<!-- Creates the 10 times table shows the multiplication of 10 by numbers 1 - 12 -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Get functionality</title>
    </head>

    <body>

    <?php
    echo '<h3>10 Times Table</h3>';
    echo '<table border="1">';
    echo '<tr><th>Calculation</th><th>Answer</th></tr>';

    for($i=1; $i<=12; $i++)
        echo "<tr><th>" . $i . "</th><th>" . $i*10 . "</th></tr>";

    echo '</table>';
    ?>

    </body>
</html>