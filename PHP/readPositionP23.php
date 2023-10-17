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
    $positions = "SELECT PositionID, PositionTittle, Company, Location, Compensation, MinimumGPA, Housing, DATE_FORMAT(Deadline, '%M %d, %Y') AS 'Deadline' FROM Position_P23";
    $stmt1 = $mysqli -> prepare($positions);
    $stmt1 -> execute();

    if ($stmt1) {
        echo "<div class='row'>";
        echo "<center>";
        echo "<h1>Positions Available</h1>";
        echo "<table>";
            echo "<thead>";
                echo "<tr> <th></th><th>Position Tittle</th><th>Company</th><th>Location</th><th>Compensation ($\hr)</th><th>Minimum GPA Required</th><th>Housing Availability</th><th>Deadline</th><th></th> </tr>";
            echo "</thead>";
            echo "<tbody>";
                while($row1 = $stmt1 -> fetch(PDO::FETCH_ASSOC)) {
                    $positionID = $row1['PositionID'];
                    $tittle = $row1['PositionTittle'];
                    $company = $row1['Company'];
                    $location = $row1['Location'];
                    $compensation = $row1['Compensation'];
                    $gpa = $row1['MinimumGPA'];
                    $housing = $row1['Housing'];
                    $deadline = $row1['Deadline'];

                    echo "<tr>";

                    echo "<td> <a href='deletePositionP23.php?id=".urlencode($positionID)."' onclick='return confirm(\"Are you sure you want to delete this internship?\");' style='color:red'> X </a></td>";
                    echo "<td>".$tittle."</td>";
                    echo "<td>".$company."</td>";
                    echo "<td>".$location."</td>";
                    echo "<td>".$compensation."</td>";
                    echo "<td>".$gpa."</td>";
                    if ($housing == 0) {
                        $availability = "Not Available";
                    } else if ($housing == 1) {
                        $availability = "Available";
                    }
                    echo "<td>".$availability."</td>";
                    echo "<td>".$deadline."</td>";
                    echo "<td> <a href='editPositionP23.php?id=".urlencode($positionID)."'> Edit </a></td>";
                }
            echo "</tbody>";
        echo "</table>";
        
        echo "<p><a href='addPositionP23.php'>Add an Internship</a></p>";
        echo "</center>";
        echo "<br /> <p> &laquo <a href='entryP23.php'> Back to Main Page </a> </p>";
        echo "</div>";
    }

    new_footer();
    Database::dbDisconnect($mysqli);
?>