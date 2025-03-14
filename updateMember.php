<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Update Member details</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Update Member details</h1>
            <ul>
                <li><a href="index.php">View details for all Members</a></li>
                <li><a href="addMember.php">Add a new Member</a></li>
                <li><a href="deleteMember.php">Delete a Member</a></li>
            </ul>
            
            <?php
            include ('connection.php');
                // If id submitted do this
                if(isset($_POST['idBtn'])){
                    // Gets id from form
                    $id = addslashes($_POST['id']);
                    $sql = "SELECT * FROM member WHERE id = '$id';";
                    $result = mysqli_query($db, $sql);

                    // If there is no error
                    if($result){
                        // Tells the user if the record already exists
                        if(mysqli_num_rows($result) === 1){
                            
                            // Gets the row associated with the id
                            $row = mysqli_fetch_assoc($result);
                            mysqli_close($db);

                            echo "<form action='" . $_SERVER["PHP_SELF"] . "' method='post'>";
                                echo "ID: <input readonly type='text' name='id' value='". $row["id"] ."'><br>";
                                echo "First name: <input type='text' name='firstname' value='". $row["firstname"] ."'><br>";
                                echo "Second name: <input type='text' name='lastname' value='". $row["lastname"] ."'><br>";
                                echo "Phone Number: <input type='text' name='phone' value='". $row["phone"] ."'><br>";
                                echo "<input type='submit' name='updateValues' value='SAVE UPDATE'><br>";
                            echo "</from>";

                            exit();
                        }
                        else{
                            echo "<h3>No Member was found matching this ID</h3>";
                        }
                    }
                    
                }
                // When updateValues is pressed the following is run
                else if(isset($_POST["updateValues"])){

                    $id = addslashes($_POST["id"]);
                    $firstname = addslashes($_POST["firstname"]);
                    $lastname = addslashes($_POST["lastname"]);
                    $phone = addslashes($_POST["phone"]);

                    // Sets updates the values in the database
                    $sql = "UPDATE member SET id='$id', firstname='$firstname', lastname='$lastname', phone='$phone' WHERE id='$id';";
                    $result = mysqli_query($db, $sql);

                    if(mysqli_affected_rows($db) === 1){
                        echo "<h3>Member details updated successfully</h3>";
                    }
                    else{
                        echo "<h3>An error occurred while updating</h3>";
                    }
                }
            
            // Will be shown if the other form is not showing
            echo "<form action='" . $_SERVER["PHP_SELF"] . "' method='post'>";
            echo "ID of Member to update: <input required type='text' name='id'><br>";
            echo "<input type='submit' name='idBtn' value='UPDATE'><br>";
            echo "</form>";
            ?>
    </body>
</html>
