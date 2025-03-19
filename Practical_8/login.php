<?php

//join/start a session between the browser client and the Apache web server
session_start();

//if the 'user' session variable was set in a previous request, forward the user to the appropriate page
//Send to employeeHome.php if the user is a employee
//Send to adminHome.php if the user is an admin
if(isset($_SESSION['user']))
{
    if($_SESSION['user']['usertype'] == 'employee')
    {
        //header('location: PAGE') is used to redirect to a new page
        header('location: employeeHome.php');
    }
    //else if the user type is 'admin', redirect to the admin page
    elseif($_SESSION['user']['usertype'] == 'admin')
    {
        header('location: adminHome.php');
    }
}

// including the database connection parameters defined in connection.php
include ('connection.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Practical 7</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>

    <h3>Log in</h3>

<form action="login.php" method="post">
    User Name:<input required type="text" name="username"><br>
    Password:<input required type="password" name="password"><br>
    <input type="submit" name="loginBtn" value="Log In">
</form>    


<?php
    //Do not modify code above this line
        
    //Add your code for Task 4 here
        
    //Do not modify code after this line
?>

    </body>
</html>
