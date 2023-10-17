<?php

	session_start();
	
	$now = time();
	if (isset($_SESSION["discard_after"]) && $now > $_SESSION["discard_after"]) {
		// this session has worn out its welcome; kill it and start a brand new one
		session_unset();
		session_destroy();
		session_start();
	}

	// either new or old, it should live at most for another hour
	$_SESSION["discard_after"] = $now + 3600;
	//$_SESSION["discard_after"] = $now + 3;

	function message() {
		if (isset($_SESSION["message"])) {
			
			$output = "<div class='row'>";
			$output .= "<div data-alert class='alert-box info round'>";
			$output .= htmlentities($_SESSION["message"]);
			$output .= "</div>";
			$output .= "</div>";
			
			// clear message after use
			$_SESSION["message"] = null;
			
			return $output;
		}
		else {
			return null;
		}
	}

	function errors() {
		if (isset($_SESSION["errors"])) {
			$errors = $_SESSION["errors"];
			
			// clear message after use
			$_SESSION["errors"] = null;
			
			return $errors;
		}
	}
/////////////////////////////////////////////////////////////////////////////////////////////////////
//  Step 8.     Write the function verify_login which will need to be invoked in each of the webpages
//              for your CRUD interface
				//Verify the admin session variable has been set and is not null
				//If either case is false, create a session message "You must login in first"
				//and redirect to index_<yourLastName>.php, replacing <yourLastName> with your last name and including the semester

	function verify_login() {
		if(!isset($_SESSION["admin"])&& $_SESSION["admin"] === NULL) {
			$_SESSION["message"] = "You must login in first!";
			header("Location: indexS23Kimsanboev.php");
			exit;
			//redirect("indexS23.php");
		}
	}
				
				
///////////////////////////////////////////////////////////////////////////////////////////////////	
	
?>