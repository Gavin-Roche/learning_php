<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Add a new Member</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Add a new Member</h1>
            <ul>
                <li><a href="index.php">View details for all Members</a></li>
                <li><a href="updateMember.php">Update Member Details</a></li>
                <li><a href="deleteMember.php">Delete a Member</a></li>
            </ul>
            
            <?php
            include ('connection.php');
            ?>

            <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
                ID: <input required type="text" name="id"><br>
                First name: <input type="text" name="firstname"><br>
                Second name: <input type="text" name="lastname"><br>
                Phone Number: <input type="text" name="phone"><br>
                <input type="submit" name="submit" value="Add Member"><br>
            </from>

            <?php
                // If submitted do this
                if(isset($_POST['submit'])){
                    // Gets id row from the form
                    $id = addslashes($_POST['id']);
                    $sql = "SELECT * FROM member WHERE id = '$id';";
                    $result = mysqli_query($db, $sql);

                    // If there is no error
                    if($result){
                        // Tells the user if the record already exists
                        if(mysqli_num_rows($result) > 0){
                            echo "<h3>A record with this id already exists!</h3>";
                            exit();
                        }
                    }

                    // Gets Information from form
                    $firstname = addslashes($_POST["firstname"]);
                    $lastname = addslashes($_POST["lastname"]);
                    $phone = addslashes($_POST["phone"]);

                    // Inserts the information from the form
                    $sql = "INSERT INTO member (id, firstname, lastname, phone) VALUES ('$id', '$firstname', '$lastname', '$phone');";
                    $result = mysqli_query($db, $sql);

                    // Checks that the database updated.
                    if($result){
                        echo "<h3>Member added successfully!</h3>";
                    }
                    else{
                        echo "<h3>An error occurred, member has not been added";
                    }

                    // Close Database
                    mysqli_close($db);
                }
            ?>
    </body>
</html>
