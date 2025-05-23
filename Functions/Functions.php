<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Functions</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>

    <?php

    //Function 1
    function numberClassifier($num)
    {
        if ($num % 2 == 0)
            return "The number is even";
        else
            return "The number is odd";
    }

    echo "<h3>Solution 1:</h3>";
    //Testing when number is even
    echo numberClassifier(2);
    echo "<br>";

    //Testing when number is odd
    echo numberClassifier(5);
    echo "<br>";

    //Function 2
    function comparer($var1, $var2)
    {
        if ($var1 === $var2)
            return "The variables are identical";
        else if ($var1 == $var2)
            return "The variables are only equal";
        else
            return "The variables are not equal";
    }

    echo "<h3>Solution 2:</h3>";
    //Testing with identical variables (equal and the same type)
    echo comparer("2", "2");
    echo "<br>";

    //Testing with equal variables (equal with different types)
    echo comparer("2", 2);
    echo "<br>";

    //Testing with variables that are not equal
    echo comparer("2", 3);

    //Function 3
    function getFirstCharacter($string)
    {
        return substr($string,0,1);
    }

    echo "<h3>Solution 3:</h3>";
    echo getFirstCharacter("HTML");
    echo "<br>";

    //Function 4
    function getLastCharacter($string)
    {
        return substr($string,-1);
    }

    echo "<h3>Solution 4:</h3>";
    echo getLastCharacter("HTML");

    //Function 5
    function printArray($array)
    {
        foreach($array as $key => $value)
            echo "$key=>$value<br>";
    }

    echo "<h3>Solution 5:</h3>";
    $array = array("One"=>1, "Two"=>2, "Three"=>3);
    printArray($array);

    //Function 6
    function concatenateArrayValues($array)
    {
        return implode("", $array);
    }

    echo "<h3>Solution 6:</h3>";
    echo concatenateArrayValues($array);

    ?>

    </body>
</html