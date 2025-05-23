<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Simple loop</title>
    </head>

    <body>
    <?php
    echo "<p>Welcome to Web Programming</p>";
    $i=1;
    while($i<=5)
    {
        echo "The value of the loop variable (i) is = " . $i . "<br />";
        $i++;
    }
    ?>
    </body>
</html>
