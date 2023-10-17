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
		$positionID = $_GET['id'];
        $delete = "DELETE FROM Position_P23 WHERE PositionID = ?";
		$stmt = $mysqli -> prepare($delete);			
        $stmt -> execute([$positionID]);

        if ($stmt)  {
            $_SESSION["message"] = "The Internship was deleted!";			    
            redirect("readPositionP23.php");
		} else {
            $_SESSION["message"] = "The Internship could not be deleted!";
		    redirect("readPositionP23.php");
       }		
	} else {
		$_SESSION["message"] = "The Internship was not found!";
		redirect("readPositionP23.php");
	}
					

	new_footer();
	Database::dbDisconnect($mysqli);
?>