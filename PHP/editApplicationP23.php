<?php 
	require_once("database.php");
	require_once("included_functions.php");
	require_once("session.php");
	

	new_header("Bekzod Kimsanboev Final Project Spring 2023");
	$mysqli = Database::dbConnect();
	$mysqli -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	if (($output = message()) != null) {
		echo $output;
	}

	echo "<form method='POST' action='editApplicationP23.php'>";
	echo "<center> <h3>Update an Application</h3> </center>";
	echo "<div class='row'>";
	echo "<label for='left-label' class='left inline'>";

	if (isset($_POST['submit'])) {
        if (isset($_POST['status']) && $_POST['status'] != "") {
            $number = $_POST['number'];
            $status = $_POST['status'];
            $update = "UPDATE Application_P23 SET Status = ? WHERE ApplicationNumber = ?";
            $stmt1 = $mysqli -> prepare($update);
            $stmt1 -> execute([$status, $number]);
        
		    if ($stmt1) {
			    $_SESSION["message"] = "The Application has been updated";
		    } else {
			    $_SESSION["message"] = "Error! Could not update the application";
                redirect("editApplicationP23.php");
		    }
		    redirect("readApplicationP23.php");
        } else {
            $_SESSION["message"] = "Error! Could not update the application. Fill in all information!";
            redirect("readApplicationP23.php");
        }
	} else {
		if (isset($_GET['id']) && $_GET['id'] !== "") {
			$number = $_GET['id'];
            $application = "SELECT ApplicationNumber, FirstName AS 'First Name', LastName AS 'Last Name', MajorName AS 'Major', ApplicationDate AS 'Submission Date', PositionTittle AS 'Position', Company, Status 
                                    FROM Student_P23 LEFT OUTER JOIN Major_P23 ON Student_P23.MajorID = Major_P23.MajorID
                                    NATURAL JOIN Application_P23
                                    NATURAL JOIN Position_P23 
                                    WHERE ApplicationNumber = ?
                                    ORDER BY ApplicationDate";

			$stmt = $mysqli -> prepare($application);
			$stmt -> execute([$number]);

            if ($stmt)  {
				while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
					echo "<input type = 'hidden' name = 'number' value = '".$row['ApplicationNumber']."' />";
					echo "<h4>".$row['First Name']." ".$row['Last Name']." </h4>";
                    echo "<p> Student Major: ".$row['Major']."</p>";
					echo "<p> Applied Position: ".$row['Position']."</p>";
                    echo "<p> Company: ".$row['Company']."</p>";
                    echo "<p> Submission Date: ".$row['Submission Date']."</p>";
                    echo "<p> Current Status: ".$row['Status']."</p>";
                    echo "<p> Change Status: </p>";
                    echo "<select type = 'text' name = 'status'>";
                        echo "<option></option>";
                        echo "<option>Accepted</option>";
                        echo "<option>Rejected</option>";
                        echo "<option>Pending</option>";
                    echo "</select>";

				}
			}
			echo "<input type='submit' name='submit' class='button tiny round' value='Update'/>";
			echo "<br /> <p> &laquo <a href='readApplicationP23.php'> Back to Main Page </a> </p>";
			echo "</label>";
			echo "</div>";
			echo "</form>";
		} else {
			$_SESSION["message"] = "The Internship was not found!";
			redirect("readApplicationP23.php");
		}
    }
					

	new_footer();
	Database::dbDisconnect($mysqli);
?>