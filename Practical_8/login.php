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
    <title>Practical 8</title>
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
    // If the login button is pressed, this retrieves records from the database for the entered username.
    if(isset($_POST['loginBtn'])){
        $username = $_POST['username'];
        $sql = "SELECT * FROM user WHERE username = '$username';";
        $result = mysqli_query($db, $sql);

        // Checks if the record exists
        if($result){
            if(mysqli_num_rows($result) === 1){
                $password = $_POST['password'];
                $hashed_password = hash('ripemd160', $password);

                $row = mysqli_fetch_assoc($result);
                mysqli_close($db);

                // If the password is correct, it sets the session array and redirects to the correct page based on the user type.
                if ($row['password'] === $hashed_password){
                    $_SESSION['user'] = $row;

                    if($_SESSION['user']['usertype'] == 'admin'){
                        header('location: adminHome.php');
                        exit();
                    }
                    else{
                        header('location: employeeHome.php');
                        exit();
                    }
                }
                // If the password is incorrect
                else{
                    echo "Password incorrect please try again";
                }
            }
            // If the username is incorrect
            else{
                echo "Username not found please try again";
            }
        }
    }
?>

    </body>
</html>
