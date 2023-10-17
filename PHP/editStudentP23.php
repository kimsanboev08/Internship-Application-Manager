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

	echo "<form method='POST' action='editStudentP23.php'>";
	echo "<center> <h3>Update Student Information</h3> </center>";
	echo "<div class='row'>";
	echo "<label for='left-label' class='left inline'>";

	if (isset($_POST['submit'])) {
        if(isset($_POST['major']) && $_POST['major'] != "") {
            $studentID = $_POST['studentID'];
            $newMajor = $_POST['major'];
            $update = "UPDATE Student_P23 SET MajorID = ? WHERE StudentID = ?";
            $stmt2 = $mysqli -> prepare($update);
            $stmt2 -> execute([$newMajor, $studentID]);

            if($stmt2) {
                $_SESSION["message"] = "Student Information was updated!";
            } else {
                $_SESSION["message"] = "Student Information could not be updated!";
            }
        } else {
            $_SESSION["message"] = "No changes were made!";
        }
        redirect("readStudentP23.php");
	} else {
		if (isset($_GET['id']) && $_GET['id'] !== "") {
			$studentID = $_GET['id'];
            $select = "SELECT StudentID, Student_P23.Firstname AS 'First Name', Student_P23.LastName AS 'Last Name', Birthdate, MajorName AS 'Major', Classification, CAST(GPA AS DECIMAL(18,2)) AS GPA FROM Student_P23 NATURAL JOIN Major_P23 WHERE StudentID = ?";
			$stmt = $mysqli -> prepare($select);
			$stmt -> execute([$studentID]);

            if ($stmt)  {
				while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
					echo "<input type = 'hidden' name = 'studentID' value = '".$studentID."' />";
					echo "<h4> ".$row['First Name']." ".$row['Last Name']." </h4>";
					echo "<p> Birthdate: ".$row['Birthdate']."</p>";
                    echo "<p> Current Major: ".$row['Major']."</p>";
                    echo "<p> Change Major: </p>";

                    $selectMajor = "SELECT MajorID, MajorName FROM Major_P23";
            

                    $stmt1 = $mysqli -> prepare($selectMajor);
                    $stmt1 -> execute();

                    
                    if ($stmt1) {
                        echo "<select type='number' name='major'>";
                        echo "<option></option>";
                        while($row1 = $stmt1->fetch(PDO::FETCH_ASSOC)) {
                            echo "<option value='".$row1['MajorID']."'>".$row1['MajorName']."</option>";
                        }
                        echo "</select>";

                    }
                    echo "<p> Classification: ".$row['Classification']."</p>";
                    echo "<p> GPA: ".$row["GPA"]."</p>";
				}
			}
			echo "<input type='submit' name='submit' class='button tiny round' value='Update' />";
			echo "<br /> <p> &laquo <a href='readStudentP23.php'> Back to Main Page </a> </p>";
			echo "</label>";
			echo "</div>";
			echo "</form>";
		} else {
			$_SESSION["message"] = "The Student was not found!";
			redirect("readStudentP23.php");
		}
    }
					

	new_footer();
	Database::dbDisconnect($mysqli);
?>