<?php
    require_once("session.php");
    require_once("included_functions.php");
    require_once("database.php");

    new_header("Bekzod Kimsanboev Final Project Spring 2023");
    $mysqli = Database::dbConnect();
    $mysqli -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (($output = message()) != null) {
        echo $output;
    }


    
    echo "<div class='row'>";
    //echo "<center>";
    echo "<h1>Internship Application Tracker</h1>";
    echo "<ol>";
        echo "<li> <a href='readStudentP23.php'>Student Data</a> </li>";
        echo "<li> <a href='readPositionP23.php'>Positions</a> </li>";
        echo "<li> <a href='readApplicationP23.php'>Applications</a> </li>";
    echo "</ol>";
    

    //echo "</center>";
    echo "</div>";
    

    new_footer();
    Database::dbDisconnect($mysqli);
?>