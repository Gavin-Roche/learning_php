<?php
/*
This file is used to connect to the database
The Parameters must be changed to accommodate the database that is set up in the user environment
*/

$host = '127.0.0.1';
$username = 'root';
$password = '';
$dbname = 'bookclub';

// Tries to make a database connection
try{
    $db = mysqli_connect($host, $username, $password, $dbname);
}
// If there is an error in connecting to the database
catch(mysqli_sql_exception $error){
    echo "Failed to connect to MySQL<br>";
    echo "Error Code: " . $error->getCode() . "<br>";
    echo "Error Message: " . $error->getMessage() . "<br>";
    exit();
}

?>