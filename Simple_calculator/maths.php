<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Maths</title>
    </head>
    <body>


        <?php
    if ((isset($_POST['btn'])) && (($_POST['btn']) == 'ADD'))
    {
        echo 'The SUM of '.$_POST['value1'] . ' and '.$_POST['value2'] . ' is = '. ($_POST['value1'] + $_POST['value2']).'<br>';
    }
    elseif ((isset($_POST['btn'])) && (($_POST['btn']) == 'SUBTRACT'))
    {
        echo 'The DIFFERENCE of '.$_POST['value1'] . ' and '.$_POST['value2'] . ' is = '. ($_POST['value1'] - $_POST['value2']).'<br>';
    }
    elseif ((isset($_POST['btn'])) && (($_POST['btn']) == 'TABLE'))
    {

        echo '<table border="1">';
        
        for($i=1; $i<=$_POST['value2']; $i++)
        {
            echo "<tr><th>" . $_POST['value1'] . "</th><th>Times</th><th>$i</th><th>". '= ' . $_POST['value1'] * $i. "</th></tr>";
        }

        echo '</table>';
    }
    else
    {
            echo "<p>Please submit the form.</p>";
            echo "<a href=menu.html>Go back to form</a><br>";
    }
    ?>

        <a href="menu.html">Link to the menu page</a>
    </body>
</html>