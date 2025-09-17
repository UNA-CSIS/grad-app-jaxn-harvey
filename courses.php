<?php
    session_start();
    
    // Remembering name
    $_SESSION["fname"] = $_POST["fname"];
    $_SESSION["lname"] = $_POST["lname"];
    
    // Total number of courses
    $_SESSION["totalCourses"] = 6;
?>

<html>
    <body>
        
        Welcome, <?php 
                echo $_SESSION["fname"];?> <?php
                echo $_SESSION["lname"];?><br>
        <form action="accomplishments.php" method="POST">
            Object-Oriented Programming<input type="checkbox" name="oop" ><br>
            Systems Analysis and Design<input type="checkbox" name="sad"><br>
            Advanced Programming<input type="checkbox" name="ap"><br>
            Introduction to Computer Security<input type="checkbox" name="ics"><br>
            Introduction to Networking<input type="checkbox" name="in"><br>
            Web Development<input type="checkbox" name="wd"><br>
            <input type="submit">
        </form>
    </body>
</html>