<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css.css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body background="image/pexels-hngstrm-1939485.jpg" style="background-color:beige; ">
    <?php 
    require_once ("includes/db_connect.php"); 
    include_once ("templates/nav.php"); 
    include_once ("templates/header.php");

    if(isset($_POST["save_details"])){

    $fn= $_POST["fullname"];
    $un= $_POST["username"];
    $pwd= $_POST["password"];

    $insert_message = "INSERT INTO messages (sender_name, sender_username, sender_password)
VALUES ('$fn', '$un', '$pwd')";

if ($conn->query($insert_message) === TRUE) {
  header("Location: contacts.php");
  exit();
} else {
  echo "Error: " . $insert_message . "<br>" . $conn->error;
}
    }
    ?>

    <div class="row:after">
        <div class="content">
            
            <form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="contacts_form label">
        
                <label for="fn">Fullname:</label><br>
                <input type="text" id="fn"
                placeholder="Fullname" name="fullname" required><br><br>

                <label for="un">Username:</label><br>
                <input type="text" id="un"
                placeholder="Create Username" name="username" required><br><br>

                <label for="pwd">Password:</label><br>
                <input type="text" id="pwd"
                placeholder="Create Password" name="password" required><br><br>

                <input type="Submit" name="save_details" value="Save Details">

            </form>
        </div>
        <?php include_once ("templates/sidebar.php"); ?>
    </div>
    <div class="footer" style="margin-block-start: 400px;">
        copywrite CONSTRUCTION CO 2024 &copy; All rights reserved
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
</body>
</html>