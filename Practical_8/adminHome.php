<?php

//join/start a session between the browser client and the Apache web server
session_start();


//Do not modify code above this line
       
//TASK 5.1
//Add code that redirects to the registration page if the user is not logged in as an admin
        
//Do not modify code after this line

?>

<!DOCTYPE html>
<html>
<head>
    <title>Practical 7</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body style="background-color:lightgreen;">

    <h3>Admin Home Page</h3>

    <a href='logout.php'>Log Out</a><br>

    <?php
        
        //Do not modify code above this line
       
        //TASK 5.2
        //Add code that outputs a personalised greeting for the logged in admin (should contain the username) 
        
        //Do not modify code after this line
    ?>

    </body>
</html>