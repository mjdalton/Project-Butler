<?php

if (isset($_POST['submit'])){ //checks if the submit button has been clicked
	
	include_once 'dbh-inc.php';
	$first = mysqli_real_escape_string($conn, $_POST['first']); //takes in the first name from the form
	//the mysqli_real_escape_string function converts the input to a string so that malicious code can't be executed within our database
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	
	//Error handlers
	if(empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)){ //Check for empty fields
			header("Location: ../signup.php?signup=empty"); //sends user back to the signup page if submit wasn't clicked
			exit(); //stops script from running
	} else {
//		if(!preg_match("/^[a-zA-Z]*$", $first) || !preg_match("/^[a-zA-Z]*$", $last)){ //Check if input characters are valid for first/last name
//			//If not valid
//			header("Location: ../signup.php?signup=invalid"); //sends user back to the signup page
//			exit(); //stops script from running
//		} else{
//			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){ //Check if email is valid
//				header("Location: ../signup.php?signup=email"); //sends user back to the signup page
//				exit(); //stops script from running
//			} else {
//				$sql = "SELECT * FROM users WHERE user_uid='$uid'"; //if there is a user with the same username
//				$result = musqli_query($conn, $sql);
//				$resultCheck = mysqli_num_rows($result);
//				
//				if($resultCheck > 0){
//					("Location: ../signup.php?signup=usertaken"); //sends user back to the signup page 
//					exit(); //stops script from running
//				} else{
					//Hashing the password for security
					$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
					//Insert the user into the database
					$sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$first', '$last', '$email', '$uid', '$hashedPwd');";
					mysqli_query($conn, $sql);
					header("Location: ../signup.php?signup=success"); //sends user back to the signup page 
					exit(); //stops script from running
				}
			}
		//}
//	}
	
//} 
//else{
//	header("Location: ../signup.php?signup=error"); //sends user back to the signup page if submit wasn't clicked
//	exit(); //stops script from running
//}
