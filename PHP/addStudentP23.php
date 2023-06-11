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


    echo "<form method='POST' action='addStudentP23.php'>";
	echo "<center> <h1>Add a Student</h1> </center>";
	echo "<div class='row'>";
	echo "<label for='left-label' class='left inline'>";

    if(isset($_POST['submit'])){
        if((isset($_POST['first']) && $_POST['first'] != "") && (isset($_POST['last']) && $_POST['last'] != "") && (isset($_POST['major']) && $_POST['major'] != "") && (isset($_POST['classification']) && $_POST['classification'] != "") && (isset($_POST['gpa']) && $_POST['gpa'] != "") && (isset($_POST['year']) && $_POST['year'] != "")  && (isset($_POST['month']) && $_POST['month'] != "") && (isset($_POST['day']) && $_POST['day'] != "") ) {
            $first = $_POST['first'];
            $last = $_POST['last'];
            $major = $_POST['major'];
            $classification = $_POST['classification'];
            $gpa = $_POST['gpa'];

            // Check the date
            $month = (int)$_POST['month'];
            $day = (int)$_POST['day'];
            if (($month == 4 || $month == 6 || $month == 9 || $month == 11) && $day == 31) {
                $_SESSION["message"] = "Incorrect date format. Please check the date entered carefully.";
		        redirect("addStudentP23.php");
            } else if ($month == 2 && $day > 29) {
                $_SESSION["message"] = "Incorrect date format. Please check the date entered carefully.";
		        redirect("addStudentP23.php");
            }
            $birthdate = $_POST['year']."-".$_POST['month']."-".$_POST['day'];

            $insert = "INSERT INTO Student_P23(FirstName, LastName, Birthdate, MajorID, Classification, GPA) VALUES(?, ?, ?, ?, ?, ?)";
            $stmt5 = $mysqli -> prepare($insert);
            $stmt5 -> execute([$first, $last, $birthdate, $major, $classification, $gpa]);
            
            if($stmt5) {
                $_SESSION["message"] = "A new student has been added!";
                redirect("readStudentP23.php");
            } else {
                $_SESSION["message"] = "Unable to add a student. Something went wrong!";
                redirect("addStudentnP23.php");
            }
        } else {
            $_SESSION["message"] = "Unable to add a student. Fill in all information!";
		    redirect("addStudentP23.php");
        }
    } else {
        echo "<p> First Name: <input type='text' name='first'> </p>";
        echo "<p> Last Name: <input type='text' name='last'> </p>";

        echo "<p> Select Major: </p>";
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

        echo "<p> Select Classification: </p>";
        echo "<select type ='text' name='classification'>";
            echo "<option>Freshman</option>";
            echo "<option>Sophomore</option>";
            echo "<option>Junior</option>";
            echo "<option>Senior</option>"; 
        echo "</select>";

        echo "<p> GPA: <input type='number' min='0.00' max='4.00' step='0.01' name='gpa'> </p>";
        
        echo "<p> Birthdate: </p>";
        echo "<p1> Year: <input type='text' name='year'> </p>";
        echo "<p1> Month: </p>";
        echo "<select type ='text' name='month'>";
            for ($x = 1; $x <= 12; $x++) {
                echo "<option>".$x."</option>";
            }
        echo "</select>";
        echo "<p1> Day: </p>";
        echo "<select type ='text' name='day'>";
            for ($x = 1; $x <= 31; $x++) {
                echo "<option>".$x."</option>";
            }        
        echo "</select>";

    }

    echo "<input type='submit' name='submit' class='button tiny round' value='Add' />";
	echo "</label>";
	echo "</div>";
	echo "</form>";
	echo "<br /> <p> &laquo: <a href='readStudentP23.php'> Back to Main Page </a>";

    

    new_footer();
    Database::dbDisconnect($mysqli);
?>