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
require_once("includes/db_connect.php");
include_once ("templates/nav.php");



if(isset($_GET["DelId"])){
    $DelId=$_GET["DelId"]; 

    // sql to delete a record
    $del_mes = "DELETE FROM messages WHERE messageId='$DelId' LIMIT 1";

    if ($conn->query($del_mes) === TRUE) {
        header("Location:view_messages.php");
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
?>

    <div class="row:after">

        <div class="content"> 
            <h2>Messages</h2>
            <p>To clone a repository, run the Git: Clone command in the Command Palette (Ctrl+Shift+P), or select the Clone Repository button in the Source Control view. If you clone from GitHub, VS Code prompts you to authenticate with GitHub. Then, select a repository from the list to clone to your machine.</p>
            <table>
                <thead>
                <tr>
                    <th colspan="2">Sender name</th>
                    <th>Sender Email</th>
                    <th>Subject line</th>
                    <th>Time</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                
            <?php
            $select_msg = "SELECT * FROM messages ORDER BY datecreated DESC";
            $sel_msg_res = $conn->query($select_msg);
            $en= 0;

            if ($sel_msg_res->num_rows > 0) {
                
              // output data of each row
              while($sel_msg_row = $sel_msg_res->fetch_assoc()) {
                $en++;
               ?>
               
               <tr>
                <td><?php print $en; ?>.</td>
                <td><?php print $sel_msg_row["sender_name"]; ?></td>
                <td><?php print $sel_msg_row["sender_email"]; ?></td>
                <td><?php print "<strong>". $sel_msg_row["subject_line"] . '</strong> -' . substr($sel_msg_row["text_message"],0,20) . '...'; ?></td>
                <td><?php print date("d-M-Y H:i", strtotime( $sel_msg_row["datecreated"])); ?></td>
                <td> [ <a href="edit_msg.php?messageId=<?php print $sel_msg_row["messageId"]; ?>">Edit</a>] [<a href="?DelId=<?php print $sel_msg_row["messageId"]; ?>" onclick="return confirm('This action will delete this message permanently. \n Are you sure you want to proceed?');">Del]</td>
               </tr>
               <?php
              }
            } else {
                echo "0 results";
            }
?>
         </tbody>
         <thead>
                <tr>
                    <th colspan="2">Sender Name</th>
                    <th>Sender Email</th>
                    <th>Subject line</th>
                    <th>Time</th>
                    <th>Action</th>
                </tr>
                </thead>   
                
            </table>
        </div>

        
    </div>
    <div class="footer" style="margin-block-start: 550px;">
        copyright CONSTRUCTION CO <?php print date("Y"); ?>  &copy; All rights reserved
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
</body>
</html>