<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
        <title>Salim's form</title>
        <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        header {
            background: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
            border-bottom: #77b5fe 3px solid;
        }
        form {
            background: #fff;
            padding: 20px;
            margin: 20px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        form div {
            margin-bottom: 15px;
        }
        form label {
            display: block;
            margin-bottom: 5px;
        }
        form input[type="text"], form input[type="email"], form textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        form textarea {
            resize: vertical;
        }
        form input[type="submit"] {
            background: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        form input[type="submit"]:hover {
            background: #77b5fe;
        }
    </style>

    </head>
   
    <body>
        <?php require_once ("includes/db_connect.php"); ?>
        <h1>Forms</h1>
        <form action="" method="post">
            <label for="fn"> Fullname:</label><br>
            <input type="text" id="fn"
            placeholder="Fullname"><br><br>
            
            <label for="pwd"> Password:</label><br>
            <input type="password" id="pwd"
            placeholder="password"><br><br>

            <input type="number"
            placeholder="age"><br><br>
            <input type="email"
            placeholder="Email"><br><br>
            <input type="date"
            placeholder="deadline"><br><br>

            <input type="time"
            placeholder="deadline"><br><br>

            <input type="level" type="radio" id="Basic"><label for="Basic">Basic</label><br><br>
            <input type="level" type="radio" id="intermediate"><label for="intermediate">intermediate</label><br><br>
            <input type="level" type="radio" id="Advanced"><label for="Advanced">Advanced</label><br><br>
            <input type="level" type="radio" id="Basic"><label for="Basic">Basic</label><br><br>


            <input type="radio" name="subject" value="mathematics"> Mathematics <br>
            <input type="radio" name="subject" value="physics"> Physics<br>
            <input type="radio" name="subject" value="mathematics"> Mathematics <br>
            <input type="radio" name="subject" value="physics"> Physics<br><br>


            <input type="checkbox" name="Biology" value="on" /> Biology<br>
            <input type="checkbox" name="Chemistry" value="on" /> Chemistry<br>
            <input type="checkbox" name="Biology" value="on" /> Biology<br>
            <input type="checkbox" name="Chemistry" value="on" /> Chemistry<br><br>

             <select name="" id="">
                <option value="">--Select gender--</option>
                <option value="">Female</option>
                <option value="">Male</option>
                <option value="">Rather not say</option>
             </select>

             <br><br><input type="submit" name="submit" value="Submit" />
             <input type="reset" name="reset" value="Reset" />
             <input type="button" name="ok" value="OK" />
             <input type="image" name="imagebutton" src="" />

             

        </form>

        <textarea name=""id =""cols="20"
        rows="20"></textarea>

    </body>