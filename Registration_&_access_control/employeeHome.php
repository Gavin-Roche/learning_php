<?php

//join/start a session between the browser client and the Apache web server
session_start();


//Do not modify code above this line
       
//TASK 6.1
//Add code that redirects to the registration page if the user is not logged in as an employee
        
//Do not modify code after this line

?>

<!DOCTYPE html>
<html>
<head>
    <title>Practical 7</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body style="background-color:yellow;">

    <h3>Employee Home Page</h3>

    <a href='logout.php'>Log Out</a><br>

    <?php
        // If the user type is correct, it displays a message; otherwise, it redirects to index.php
        if(isset($_SESSION['user'])){
            if($_SESSION['user']['usertype'] == 'employee'){
                $username = $_SESSION['user']['username'];
                echo "<br>Welcome " . $username . ", to the employee home page!";
            }
            else{
                header('location: index.php');
                exit();
            }
        }
        else{
            header('location: index.php');
            exit();
        }
    ?>

    </body>
</html>