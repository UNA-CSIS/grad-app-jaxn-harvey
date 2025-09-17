<?php
    session_start();
    
    // Saving essay question into session
    $_SESSION["accomplishments"] = $_POST["accomplishments"];
    
    // Searching essay question for PHP (not case sensitive)
    if (stripos($_SESSION["accomplishments"], "PHP") !== false){
        $_SESSION["knowsPHP"] = true;
    } else {
        $_SESSION["knowsPHP"] = false;
    }
?>

<html>
    <body>
        <h1>Confirm Information</h1><br>
        
        <b>First name: </b><?php echo $_SESSION["fname"];?><br>
        <b>Last name: </b><?php echo $_SESSION["lname"];?><br>
        <b>Classes taken: </b><br>
        <?php foreach ($_SESSION["array"] as $value) {
            echo " - $value <br>"; 
               } 
        ?>
        <b>Skills/achievements: </b><br>
    <div width=100px style="white-space: pre-wrap;">
        <?php echo $_SESSION["accomplishments"];?>
    </div><br>
        
        <form action="results.php" method="POST">
            <input type="submit">
        </form>
        
    </body>
</html>