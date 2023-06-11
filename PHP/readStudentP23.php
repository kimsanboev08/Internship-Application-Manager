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


    // Student Data
    $students_data = "SELECT StudentID, Student_P23.Firstname AS 'First Name', Student_P23.LastName AS 'Last Name', Birthdate, MajorName AS 'Major', Classification, CAST(GPA AS DECIMAL(18,2)) AS GPA FROM Student_P23 NATURAL JOIN Major_P23";

    $stmt1 = $mysqli -> prepare($students_data);
    $stmt1 -> execute();

    if ($stmt1) {
        echo "<div class='row'>";
        echo "<center>";
        echo "<h1>Student Data</h1>";
        echo "<table>";
            echo "<thead>";
                echo "<tr> <th></th><th>First Name</th><th>Last Name</th><th>Birthdate</th><th>Major</th><th>Classification</th><th>GPA</th><th></th> </tr>";
            echo "</thead>";
            echo "<tbody>";
                while($row1 = $stmt1 -> fetch(PDO::FETCH_ASSOC)) {
                    $studentID = $row1['StudentID'];
                    $firstName = $row1['First Name'];
                    $lastName = $row1['Last Name'];
                    $birthdate = $row1['Birthdate'];
                    $major = $row1['Major'];
                    $classification = $row1['Classification'];
                    $gpa = $row1['GPA'];

                    echo "<tr>";

                    echo "<td> <a href='deleteStudentP23.php?id=".urlencode($studentID)."' onclick='return confirm(\"Are you sure you want to remove this student from the list?\");' style='color:red'> X </a></td>";
                    echo "<td>".$firstName."</td>";
                    echo "<td>".$lastName."</td>";
                    echo "<td>".$birthdate."</td>";
                    echo "<td>".$major."</td>";
                    echo "<td>".$classification."</td>";
                    echo "<td>".$gpa."</td>";
                    echo "<td><a href='editStudentP23.php?id=".urlencode($studentID)."'> Edit </a></td>";

                }
            echo "</tbody>";
        echo "</table>";
        echo "<p><a href='addStudentP23.php'>Add a new Student</a></p>";
        echo "</center>";
        echo "<br /> <p> &laquo <a href='entryP23.php'> Back to Main Page </a> </p>";
        echo "</div>";
    }

    new_footer();
    Database::dbDisconnect($mysqli);
?>