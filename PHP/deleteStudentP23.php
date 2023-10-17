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


	if (isset($_GET['id']) && $_GET['id'] !== "") {
		$studentID = $_GET['id'];
        $delete = "DELETE FROM Student_P23 WHERE StudentID = ?";
		$stmt = $mysqli -> prepare($delete);			
        $stmt -> execute([$studentID]);

        if ($stmt)  {
            $_SESSION["message"] = "Student data has been deleted!";			    
		} else {
            $_SESSION["message"] = "Student data could not be deleted!";
        }
        redirect("readStudentP23.php");
	} else {
		$_SESSION["message"] = "The Student was not found!";
		redirect("readPositionP23.php");
	}
					

	new_footer();
	Database::dbDisconnect($mysqli);
?>