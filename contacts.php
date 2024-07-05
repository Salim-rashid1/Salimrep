!DOCTYPE html>
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
    if(isset($_POST["send_message"])){

        $fn= mysqli_real_escape_string($conn,$_POST["fullname"]);
        $em= mysqli_real_escape_string($conn,$_POST["email"]);
        $sl= mysqli_real_escape_string($conn,$_POST["Subject_Line"]);
        $msg= mysqli_real_escape_string($conn,$_POST["message"]);
    
        $insert_message = "INSERT INTO messages (sender_name, sender_email,subject_line, text_message)
        VALUES ('$fn', '$em', '$sl','$msg')";
    
        if ($conn->query($insert_message) === TRUE) {
            header("Location: view_messages.php");
            exit();
        } else {
            echo "Error: " . $insert_message . "<br>" . $conn->error;
        }
    }
    ?>


    <div class="row:after">
        <div class="content"> 
            <h3>Contact Us</h3>
            <p>We'd love to hear from you! Whether you have questions, feedback, or need support, feel free to reach out to us through any of the following ways:</p>
            <h5>Customer Support</h5>
            <ul >
               
                <li>Email : pekar.industrial@gmail.com </li><br>
                <li>Phone : 0722301274</li><br>
                <li>Hours : Monday-Friday, 9AM-5PM</li><br>
                
            </ul>
            <h5>Contact Form</h5>
            <p>Prefer to send us a message directly? Fill out the form below and we will get back to you as soon as possible.</p>

            <form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="contacts_form label">
                <label for="fn">Fullname:</label><br>
                <input type="text" id="fn"
                placeholder="Fullname" name="fullname" required><br><br>

                <label for="em">Email:</label><br>
                <input type="email" id="em"
                placeholder="Email" name="email" required><br><br>

<label for="sl">Subject:</label> <br>
<select name="Subject_Line" id="sl">
<option value="">--Select Subject--</option>
    <option value="repairs">Repairs</option>
    <option value="foundation">Foundation</option>
    <option value="wiring">Wiring</option>
    <option value="painting">Painting</option>
</select> <br> <br>

<label for="msg">Message:</label><br>
<textarea id="msg" 
placeholder="Enter your message here" name="message" rows="4" cols="50">
</textarea><br><br>

<input type="submit" name="send_message" value="Send Message">
</form>
</div>
<?php include_once ("templates/sidebar.php"); ?>
</div>
<div class="footer" style="margin-block-start: 800px;">
copywrite CONSTRUCTION CO 2024 &copy; All rights reserved
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
</body>

