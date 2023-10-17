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

    $states = array(
        "AL",
        "AK",
        "AZ",
        "AR",
        "CA",
        "CO",
        "CT",
        "DE",
        "FL",
        "GA",
        "HI",
        "ID",
        "IL",
        "IN",
        "IA",
        "KS",
        "KY",
        "LA",
        "ME",
        "MD",
        "MA",
        "MI",
        "MN",
        "MS",
        "MO",
        "MT",
        "NE",
        "NV",
        "NH",
        "NJ",
        "NM",
        "NY",
        "NC",
        "ND",
        "OH",
        "OK",
        "OR",
        "PA",
        "RI",
        "SC",
        "SD",
        "TN",
        "TX",
        "UT",
        "VT",
        "VA",
        "WA",
        "WV",
        "WI",
        "WY"
    );

    echo "<form method='POST' action='addPositionP23.php'>";
	echo "<center> <h1>Add an Internship</h1> </center>";
	echo "<div class='row'>";
	echo "<label for='left-label' class='left inline'>";

    if(isset($_POST['submit'])){
        if((isset($_POST['tittle']) && $_POST['tittle'] != "") && (isset($_POST['company']) && $_POST['company'] != "") && (isset($_POST['state']) && $_POST['state'] != "") && (isset($_POST['city']) && $_POST['city'] != "") && (isset($_POST['compensation']) && $_POST['compensation'] != "") && (isset($_POST['gpa']) && $_POST['gpa'] != "") && (isset($_POST['housing']) && $_POST['housing'] != "") && (isset($_POST['year']) && $_POST['year'] != "")  && (isset($_POST['month']) && $_POST['month'] != "") && (isset($_POST['day']) && $_POST['day'] != "") ) {

            $tittle = $_POST['tittle'];
            $company = $_POST['company'];
            $location = $_POST['city'].", ".$_POST['state'];
            $compensation = $_POST['compensation'];
            $gpa = $_POST['gpa'];
            if ($_POST['housing'] == 'Available') {
                $housing = 1;
            } else {
                $housing = 0;
            }

            // Check the date
            $month = (int)$_POST['month'];
            $day = (int)$_POST['day'];
            if (($month == 4 || $month == 6 || $month == 9 || $month == 11) && $day == 31) {
                $_SESSION["message"] = "Incorrect date format. Please check the date entered carefully.";
		        redirect("addPositionP23.php");
            } else if ($month == 2 && $day > 29) {
                $_SESSION["message"] = "Incorrect date format. Please check the date entered carefully.";
		        redirect("addPositionP23.php");
            }
            $deadline = $_POST['year']."-".$_POST['month']."-".$_POST['day'];

            //$_SESSION["message"] ="Tittle ".$tittle."Company ".$company."Location ".$location."Compensation ".$compensation."GPA".$gpa."housing ".$housing."deadline ".$deadline;
            //redirect("ReadPositionP23.php");

            $insert = "INSERT INTO Position_P23(PositionTittle, Company, Location, Deadline, Compensation, MinimumGPA, Housing) VALUES(?, ?, ?, ?, ?, ?, ?)";
            $stmt7 = $mysqli -> prepare($insert);
            $stmt7 -> execute([$tittle, $company, $location, $deadline, $compensation, $gpa, $housing]);
            
            if($stmt7) {
                $_SESSION["message"] = "A new internship has been added!";
                redirect("readPositionP23.php");
            } else {
                $_SESSION["message"] = "Unable to add the internship. Fill in all information!";
                redirect("addPositionP23.php");
            }
        } else {
            $_SESSION["message"] = "Unable to add the internship. Fill in all information!";
		    redirect("addPositionP23.php");
        }
    } else {
        echo "<p> Position Tittle: <input type='text' name='tittle'> </p>";
        echo "<p> Company: <input type='text' name='company'> </p>";
        echo "<p> Location: </p>";
        echo "<p1> State: </p1>";
        echo "<select type='text' name='state'>";
            echo "<option></option>";
            foreach ($states as $oneState) {
                echo "<option value='".$oneState."'>".$oneState."</option>";
            }
        echo "</select>";
        echo "<p1>City: <input type='text' name='city'> </p1>";

        echo "<p> Compensation ($\hr): <input type='number' name='compensation'> </p>";
        echo "<p> Minimum GPA Required: <input type='number' min='0.00' max='4.00' step='0.01' name='gpa'> </p>";
        echo "<p> Housing Availability: </p>";
        echo "<select type ='text' name='housing'>";
            echo "<option>Available</option>";
            echo "<option>Not Available</option>";
        echo "</select>";
        echo "<p> Deadline: </p>";
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
	echo "<br /> <p> &laquo: <a href='readPositionP23.php'> Back to Main Page </a>";

    

    new_footer();
    Database::dbDisconnect($mysqli);
?>