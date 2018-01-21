	<?php
		// if its not alpha numeric, throw error
		if(!ctype_alnum($uname)) {
			$error .= "<p>Username should be alpha numeric characters only.</p>";
		}
		// if username is not 3-20 characters long, throw error
		if (strlen($uname) < 3 OR strlen($uname) > 20) {
			$error .= "<p>Username should be within 3-20 characters long.</p>";
		}
 
	# Validate First Name #
		// if its not alpha numeric, throw error
		if (!ctype_alpha(str_replace(array("'", "-"), "",$name))) { 
			$error .= "<p>First name should be alpha characters only.</p>";
		}
		// if first_name is not 3-20 characters long, throw error
		if (strlen($name) < 3 OR strlen($name) > 20) {
			$error .= "<p>First name should be within 3-20 characters long.</p>";
		}
 
	# Validate Last Name #
		// if its not alpha numeric, throw error
		if (!ctype_alpha(str_replace(array("'", "-"), "", $lname))) { 
			$error .= "<p>Last name should be alpha characters only.</p>";
		}
		// if first_name is not 3-20 characters long, throw error
		if (strlen($lname) < 3 OR strlen($lname) > 20) {
			$error .= "<p>Last name should be within 3-20 characters long.</p>";
		}
		// if first_name is not 3-20 characters long, throw error
		if (strlen($password) < 3 OR strlen($password) > 20) {
			$error .= "<p>Password should be within 3-20 characters long.</p>";
		}
		// if first_name is not 3-20 characters long, throw error
		if ($pass1 != $pass) {
			$error .= "<p>Confirm password mismatch.</p>";
		}
		// if email is invalid, throw error
		if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) { // you can also use regex to do same
			$error .= "<p>Enter a valid email address.</p>";
		}
	}
	?>