<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Book Club</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Book Club</h1>
            <ul>
                <li><a href="addMember.php">Add a new Member</a></li>
                <li><a href="updateMember.php">Update Member Details</a></li>
                <li><a href="deleteMember.php">Delete a Member</a></li>
            </ul>
            
            <?php
            include ('connection.php');
            // The sql query
            $sql = 'SELECT * FROM member;';
            // Runs the sql query and stores the result
            $result = mysqli_query($db, $sql);
            // If results returned correctly
            if($result){
                // If there isn't any rows
                if(mysqli_num_rows($result) == 0){
                    echo "<h3>No members are currently registered</h3>";
                }
                else{
                    echo "<h3>Member List</h3><br>";
                    echo "<table border='1'>";
                    echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Phone Number</th>";
                
                    // Loops through all the rows in the database
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<tr>";
                        // Process each value in the row
                        foreach($row as $value){
                            echo "<td>$value</td>";
                        }
                        echo "</tr>";
                    }
                    echo "</table>";
                }
            }
            ?>
    </body>
</html>
