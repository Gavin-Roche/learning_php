<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Delete a Member</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Delete a Member</h1>
            <ul>
                <li><a href="index.php">View details for all Members</a></li>
                <li><a href="addMember.php">Add a new Member</a></li>
                <li><a href="updateMember.php">Update Member details</a></li>
            </ul>
            
            <?php
                include ('connection.php');
            ?>

            <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
                ID of Member to delete: <input required type="text" name="id"><br>
                <input type="submit" name="Delete" value="DELETE"><br>
            </from>

            <?php
                // If id submitted do this
                if(isset($_POST['Delete'])){
                    // Gets id from form
                    $id = addslashes($_POST['id']);
                    $sql = "SELECT * FROM member WHERE id = '$id';";
                    $result = mysqli_query($db, $sql);

                    if($result){
                        // Deletes the record if it exists
                        if(mysqli_num_rows($result) === 1){
                            $sql = "DELETE FROM member WHERE id = '$id';";
                            $result = mysqli_query($db, $sql);
                            echo "<h3>Member deleted!</h3>";
                        }
                        else{
                            echo "<h3>No record was found matching this ID</h3>";
                        }
                    }
                    // Close the connection
                    mysqli_close($db);
                }        
            ?>
    </body>
</html>