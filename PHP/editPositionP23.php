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

    $months = array(
                'January',
                'February',
                'March',
                'April',
                'May',
                'June',
                'July',
                'August',
                'September',
                'October',
                'November', 
                'December'
            );

	echo "<form method='POST' action='editPositionP23.php'>";
	echo "<center> <h3>Update an Internship</h3> </center>";
	echo "<div class='row'>";
	echo "<label for='left-label' class='left inline'>";

	if (isset($_POST['submit'])) {
        if((isset($_POST['positionID']) && $_POST['positionID'] != "") && (isset($_POST['compensation']) && $_POST['compensation'] != "") && (isset($_POST['gpa']) && $_POST['gpa'] != "") && (isset($_POST['housing']) && $_POST['housing'] != "") && (isset($_POST['year']) && $_POST['year'] != "")  && (isset($_POST['month']) && $_POST['month'] != "") && (isset($_POST['day']) && $_POST['day'] != "") ) {
            $positionID = $_POST['positionID'];
	    	$compensation = $_POST['compensation'];
            if ($_POST['housing'] == 'Available') {
                $housing = 1;
            } else {
                $housing = 0;
            }
            $gpa = $_POST['gpa'];
            // Check the date
            $var = array_search($_POST['month'], $months);
            if ($var == 0) {
                $_SESSION["message"] = "Incorrect input in field 'Month'. Please choose from the given inputs.";
		        redirect("readPositionP23.php");
            }
            $month = $var + 1;
            $day = $_POST['day'];
            if (($month == 4 || $month == 6 || $month == 9 || $month == 11) && $day == 31) {
                $_SESSION["message"] = "Incorrect date format. Please check the date entered carefully.";
		        redirect("readPositionP23.php");
            } else if ($month == 2 && $day > 29) {
                $_SESSION["message"] = "Incorrect date format. Please check the date entered carefully.";
		        redirect("readPositionP23.php");
            }
            $deadline = $_POST['year']."-".$month."-".$day;
			
		    $update = "UPDATE Position_P23 SET Compensation = ?, Housing = ?, MinimumGPA = ?, Deadline = ? WHERE positionID = ?";

		    $stmt1 = $mysqli -> prepare($update);
		    $stmt1 -> execute([$compensation, $housing, $gpa, $deadline, $positionID]);
        
		    if ($stmt1) {
			    $_SESSION["message"] = "The Internship has been updated";
		    } else {
			    $_SESSION["message"] = "Error! Could not update the internship";
                redirect("editPositionP23.php");
		    }
		    redirect("readPositionP23.php");
        } else {
            $_SESSION["message"] = "Error! Could not update the internship. Fill in all information!";
            redirect("readPositionP23.php");
        }
	} else {
		if (isset($_GET['id']) && $_GET['id'] !== "") {
			$positionID = $_GET['id'];
            $select = "SELECT PositionID, PositionTittle, Company, Location, Compensation, MinimumGPA, Housing, YEAR(Deadline), MONTH(Deadline), DAY(Deadline) FROM Position_P23 WHERE PositionID = ?";
			$stmt = $mysqli -> prepare($select);
			$stmt -> execute([$positionID]);

            if ($stmt)  {
				while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
					echo "<input type = 'hidden' name = 'positionID' value = '".$row['PositionID']."' />";
					echo "<h4>".$row['Company']." ".$row['PositionTittle']." </h4>";
					echo "<p> Position: ".$row['PositionTittle']."</p>";
                    echo "<p> Company: ".$row['Company']."</p>";
                    echo "<p> Location: ".$row['Location']."</p>";
                    echo "<p> Compensation ($\hr): <input type='number' step='1' min='0' name='compensation' value='".$row["Compensation"]."'> </p>";
                    echo "<p> Minimum GPA: <input type='number' min ='0.00' max='4.00' step='0.01' name='gpa' value='".$row["MinimumGPA"]."'> </p>";
                    echo "Housing: ";
                    echo "<select name = 'housing'>";
                        echo "<option></option>";
                        echo "<option>Available</option>";
                        echo "<option>Not Available</option>";
                    echo "</select>";
                    echo "<p> Deadline: </p>";
                    echo "<p1> Year: <input type='text' name='year' value='".$row['YEAR(Deadline)']."'> </p1>";
                    echo "<p1> Month: </p1>";
                    echo "<p1> <input list='months' type='text' name='month' value='".$months[(int)$row['MONTH(Deadline)']-1]."' autocomplete='off' ></p1>";
                    echo "<datalist id='months'>";
                        foreach($months as $oneMonth) {
                            echo "<option value='".$oneMonth."'>";
                        }
                    echo "</datalist>";
                    echo "<p1> Day: <input type='number' min ='1' max='31' step='1' name='day' value='".$row['DAY(Deadline)']."'> </p1>";
				}
			}
			echo "<input type='submit' name='submit' class='button tiny round' value='Update' />";
			echo "<br /> <p> &laquo <a href='readPositionP23.php'> Back to Main Page </a> </p>";
			echo "</label>";
			echo "</div>";
			echo "</form>";
		} else {
			$_SESSION["message"] = "The Internship was not found!";
			redirect("readPositionP23.php");
		}
    }
					

	new_footer();
	Database::dbDisconnect($mysqli);
?>