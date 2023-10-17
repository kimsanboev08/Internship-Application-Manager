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
    $application_data = "SELECT ApplicationNumber, FirstName AS 'First Name', LastName AS 'Last Name', MajorName AS 'Major', ApplicationDate AS 'Submission Date', PositionTittle AS 'Position', Company, Status 
                        FROM Student_P23 LEFT OUTER JOIN Major_P23 ON Student_P23.MajorID = Major_P23.MajorID
	                    NATURAL JOIN Application_P23
	                    NATURAL JOIN Position_P23
	                    ORDER BY ApplicationDate";

    $stmt1 = $mysqli -> prepare($application_data);
    $stmt1 -> execute();

    if ($stmt1) {
        echo "<div class='row'>";
        echo "<center>";
        echo "<h1>Applications Submitted</h1>";
        echo "<table>";
            echo "<thead>";
                echo "<tr> <th></th><th>First Name</th><th>Last Name</th><th>Major</th><th>Submission Date</th><th>Position</th><th>Company</th><th>Status</th><th></th> </tr>";
            echo "</thead>";
            echo "<tbody>";
                while($row1 = $stmt1 -> fetch(PDO::FETCH_ASSOC)) {
                    $number = $row1['ApplicationNumber'];
                    $firstName = $row1['First Name'];
                    $lastName = $row1['Last Name'];
                    $major = $row1['Major'];
                    $date = $row1['Submission Date'];
                    $position = $row1['Position'];
                    $company = $row1['Company'];
                    $status = $row1['Status'];

                    echo "<tr>";

                    echo "<td><a href='deleteApplicationP23.php?id=".urldecode($number)."' onclick='return confirm(\"Are you sure you want to withdraw this application?\");' style='color:red'> X </a></td>";
                    echo "<td>".$firstName."</td>";
                    echo "<td>".$lastName."</td>";
                    echo "<td>".$major."</td>";
                    echo "<td>".$date."</td>";
                    echo "<td>".$position."</td>";
                    echo "<td>".$company."</td>";
                    echo "<td>".$status."</td>";
                    echo "<td><a href='editApplicationP23.php?id=".urldecode($number)."'> Edit </a></td>";
                }
            echo "</tbody>";
        echo "</table>";

        echo "<p><a href='addApplicationP23.php'>New Application</a></p>";
        echo "</center>";
        echo "<br /> <p> &laquo <a href='entryP23.php'> Back to Main Page </a> </p>";
        echo "</div>";
    }

    new_footer();
    Database::dbDisconnect($mysqli);
?>