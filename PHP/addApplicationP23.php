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

    echo "<form method='POST' action='addApplicationP23.php'>";
	echo "<center> <h1>Submit a new Application</h1> </center>";
	echo "<div class='row'>";
	echo "<label for='left-label' class='left inline'>";

    if(isset($_POST['submit'])){
        if((isset($_POST['name']) && $_POST['name'] != "") && (isset($_POST['position']) && $_POST['position'] != "") && (isset($_POST['year']) && $_POST['year'] != "")  && (isset($_POST['month']) && $_POST['month'] != "") && (isset($_POST['day']) && $_POST['day'] != "") ) {

            $name = $_POST['name'];
            $position = $_POST['position'];

            // Check the date
            $month = (int)$_POST['month'];
            $day = (int)$_POST['day'];
            if (($month == 4 || $month == 6 || $month == 9 || $month == 11) && $day == 31) {
                $_SESSION["message"] = "Incorrect date format. Please check the date entered carefully.";
		        redirect("addApplicationP23.php");
            } else if ($month == 2 && $day > 29) {
                $_SESSION["message"] = "Incorrect date format. Please check the date entered carefully.";
		        redirect("addApplicationP23.php");
            }
            $date = $_POST['year']."-".$_POST['month']."-".$_POST['day'];

            // Check if such an application already exists
            $check = "SELECT StudentID, PositionID, ApplicationDate, Status FROM Application_P23 WHERE StudentID = ? AND PositionID = ?";
            $verify = $mysqli -> prepare($check);
            $verify -> execute([$name, $position]);
            $count = $verify -> rowCount();

        
            if ($count == 0) {
                // Check GPA Requirements
                $checkStudentGPA = "SELECT GPA FROM Student_P23 WHERE StudentID = ?";
                $gpaCheck1 = $mysqli -> prepare($checkStudentGPA);
                $gpaCheck1 -> execute([$name]);

                while ($rowC = $gpaCheck1 -> fetch(PDO::FETCH_ASSOC)) {
                    $gpa1 = $rowC['GPA'];
                }

                $checkPositionGPA = "SELECT MinimumGPA FROM Position_P23 WHERE PositionID = ?";
                $gpaCheck2 = $mysqli -> prepare($checkPositionGPA);
                $gpaCheck2 -> execute([$position]);

                while($rowC1 = $gpaCheck2 -> fetch(PDO::FETCH_ASSOC)) {
                    $gpa2 = $rowC1['MinimumGPA'];
                }

                if ($gpa1 >= $gpa2) {
                    $insert = "INSERT INTO Application_P23(StudentID, PositionID, ApplicationDate, Status) VALUES(?, ?, ?, 'Pending')";
                    $stmt3 = $mysqli -> prepare($insert);
                    $stmt3 -> execute([$name, $position, $date]);
            
                    if($stmt3) {
                        $_SESSION["message"] = "Application has been successfully submitted!";
                        redirect("readApplicationP23.php");
                    } else {
                        $_SESSION["message"] = "Error! Something went wrong. Please submit a new application!";
                        redirect("addApplicationP23.php");
                    }
                } else {
                    $_SESSION["message"] = "The student selected does not meet the minimum requirement for GPA. Student GPA: ".$gpa1." < Position Minimum GPA: ".$gpa2;
                    redirect("addApplicationP23.php");
                }   
            } else {
                while ($row3 = $verify -> fetch(PDO::FETCH_ASSOC)) {
                    $submitted = $row3['ApplicationDate'];
                    $status = $row3['Status'];
                }
                $_SESSION["message"] = "This application has already been submitted on ".$submitted.". It is ".$status.".";
                redirect("readApplicationP23.php");
            }
        } else {
            $_SESSION["message"] = "Unable to submit the application! Please fill in all information!";
		    redirect("addApplicationP23.php");
        }
    } else {
        echo "<p> Select Student: <a href='readStudentP23.php'>(Search)</a></p>";
        $students = "SELECT StudentID, CONCAT(FirstName, ' ', LastName) AS 'FullName' FROM Student_P23";
        $stmt1 = $mysqli -> prepare($students);
        $stmt1 -> execute();
        
        echo "<select name='name'>";
            echo "<option></option>";
        while($row1 = $stmt1 -> fetch(PDO::FETCH_ASSOC)) {
            echo "<option value='".$row1['StudentID']."'>".$row1['FullName']."</option>";
        }
        echo "</select>";

        echo "<p>Select Position: <a href='readPositionP23.php'>(Search)</a></p>";

        $positions = "SELECT PositionID, PositionTittle FROM Position_P23";
        $stmt2 = $mysqli -> prepare($positions);
        $stmt2 -> execute();
        
        echo "<select name='position'>";
            echo "<option></option>";
        while($row2 = $stmt2 -> fetch(PDO::FETCH_ASSOC)) {
            echo "<option value='".$row2['PositionID']."'>".$row2['PositionTittle']."</option>";
        }
        echo "</select>";

        echo "<p>Enter the date of the submission: </p>";
        echo "<p1> Year: <input type='text' name='year'> </p>";
        echo "<p1> Month: </p>";
        echo "<select type ='text' name='month'>";
            echo "<option></option>";
            for ($x = 1; $x <= 12; $x++) {
                echo "<option>".$x."</option>";
            }
        echo "</select>";
        echo "<p1> Day: </p>";
        echo "<select type ='text' name='day'>";
            echo "<option></option>";
            for ($x = 1; $x <= 31; $x++) {
                echo "<option>".$x."</option>";
            }        
        echo "</select>";
    }

    echo "<input type='submit' name='submit' class='button tiny round' value='Submit' />";
	echo "</label>";
	echo "</div>";
	echo "</form>";
	echo "<br /> <p> &laquo: <a href='readApplicationP23.php'> Back to Main Page </a>";

    

    new_footer();
    Database::dbDisconnect($mysqli);
?>