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
		$number = $_GET['id'];
        $delete = "DELETE FROM Application_P23 WHERE ApplicationNumber = ?";
		$stmt = $mysqli -> prepare($delete);			
        $stmt -> execute([$number]);

        if ($stmt)  {
            $_SESSION["message"] = "The Application was withdrawn!";			    
            redirect("readApplicationP23.php");
		} else {
            $_SESSION["message"] = "The Application could not be withdrawn!";
		    redirect("readApplicationP23.php");
       }		
	} else {
		$_SESSION["message"] = "The Application was not found!";
		redirect("readApplicationP23.php");
	}
					

	new_footer();
	Database::dbDisconnect($mysqli);
?>