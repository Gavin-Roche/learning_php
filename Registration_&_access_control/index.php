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
        //redirect to employeeHome.php
        header('location: employeeHome.php');
    }
    //else if the user type is 'admin', redirect to the admin page
    elseif($_SESSION['user']['usertype'] == 'admin')
    {
        //redirect to adminHome.php
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

    <h3>Employee Registration</h3>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    User Name:<input required type="text" name="username"><br>
    Password:<input required type="text" name="password1"><br>
    Confirm Password:<input required type="text" name="password2"><br>
    <input type="submit" name="registerBtn">
</form><br>

Already a member?
<a href='login.php'>Log In</a>


<?php

    if(isset($_POST['registerBtn']))
    {

        $password1 = $_POST['password1'];
        $password2 = $_POST['password2'];

        //check that the Password and Confirm password fields matches, if not, output an error and exit script
        if($password1 != $password2)
        {
            echo "<h3>Passwords do not match, please try again</h3>";
            exit();
        }

        $username = $_POST['username'];

        //Using the $username variable to check if a user with that username already exists
        $sql = "SELECT * FROM user WHERE username = '$username'";
        $result = mysqli_query($db, $sql);
        
        //if query was valid
        if($result)
        {
            //if a record already exists with the entered username, output an error message and exit out of the script
            if(mysqli_num_rows($result) > 0)
            {
                echo "<h3>Registration failed. A user with that username already exists</h3>";
                exit();
            }
        }
        
        //If the username did not already exist, insert the new employee record into the user table
        
        //Before running the query, the password is hashed
        //Applying the ripemd160 cryptographic hash function to the password (ripemd160 generates a 40 character string)
        $hashedPassword = hash('ripemd160', $password1);

        //Using the $username and $password variables when inserting the employee record
        //The usertype is hardcoded to 'employee', so any user who registers with this form will be registered as an employee
        $sql = "INSERT INTO user (username, password, usertype) VALUES ('$username', '$hashedPassword', 'employee')";

        $result = mysqli_query($db, $sql);

        //if the query was successful redirect the employee to employeeHome.php
        if($result)
        {
            echo "<h3>Registration successful!</h3>";
        }
        //Otherwise output a message indicating that registration failed
        else
        {
            echo "<h3>Registration failed, please try again</h3>";
        }

    }

?>

    </body>
</html>
