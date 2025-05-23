<?php
/**
* This file contains the database configuration and connection for this application
* The database must be configured for the users environment 
*/

//Make sure connection parameters are correct
$host = '127.0.0.1'; // e.g 'localhost' or '127.0.0.1'
$username   = 'root';  //the MySQL user name
$password   = '';  //the MySQL user password
$dbname   = 'company'; //the MySQL database name

//Attempt to make the database connection
try{
    $db = mysqli_connect($host, $username, $password, $dbname);
}
//If a mysqli_sql_exception exception object is thrown (an error occurs when connecting), the catch code will be executed
catch (mysqli_sql_exception $e) {
    // Handle the exception and show the error message
    // Accessing the error code and message from the exception object $e
    echo "Failed to connect to MySQL<br>";
    echo "Error Code: " . $e->getCode() . "<br>";
    echo "Error Message: " . $e->getMessage() . "<br>";
    //Terminate execution of the script if the connection is unsuccessful
    exit();
}


?>