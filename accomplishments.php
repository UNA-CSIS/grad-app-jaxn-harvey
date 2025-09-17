<?php
    session_start();
    
    // Sending selected classes into an array
    $_SESSION["array"] = [];
    if (isset($_POST["oop"])) {
        $_SESSION["array"][] = "Object Oriented Programming";
    }
    if (isset($_POST["sad"])) {
        $_SESSION["array"][] = "Systems Analysis and Design";
    }
    if (isset($_POST["ap"])) {
        $_SESSION["array"][] = "Advanced Programming";
    }
    if (isset($_POST["ics"])) {
        $_SESSION["array"][] = "Introduction to Computer Security";
    }
    if (isset($_POST["in"])) {
        $_SESSION["array"][] = "Introduction to Networks";
    }
    if (isset($_POST["wd"])) {
        $_SESSION["array"][] = "Web Development";
    }
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="confirmation.php" method="POST">
            Please tell us your skills/accomplishments: <br>
            <textarea 
                 style="width: 700px; height: 200px;" name="accomplishments">
                
            </textarea><br>
            <input type="submit">
        </form>
    </body>
</html>

