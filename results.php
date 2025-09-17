<?php
    session_start();
    
    // Creating function to determine whether applicant passes
    // based on number of courses, total number of course,
    //  and boolean value
    function result($coursesTaken, $totalCourses, $knowsPHP) {
        if ($coursesTaken >= ($totalCourses / 2) AND $knowsPHP == true) {
            $verdict = true;
        } else {
            $verdict = false;
        }
        return $verdict;
    }
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Results</h1><br>
        ************************<br>
        <?php 
            $decision = result(count($_SESSION["array"]),
                    $_SESSION["totalCourses"], $_SESSION["knowsPHP"]);
            if ($decision == true) {
                echo "You are accepted for a phone interview!";
            } else {
                echo "Sorry, your application was rejected";
            }
        ?><br>
        ************************<br>
        
    </body>
</html>
