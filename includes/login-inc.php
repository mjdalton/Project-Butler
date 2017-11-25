<?php

session_start();

if (isset($_POST['submit'])){ //checks if the submit button has been clicked

	include 'dbh-inc.php';
	$uid = mysqli_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_escape_string($conn, $_POST['pwd']);
	
	//Error handlers
	if(empty($uid)|| empty($pwd)){ //If fields are empty
			header("Location: ../index.php?login=empty");
			exit();
	} else{
		$sql = "SELECT * FROM users WHERE user_uid='$uid'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result); //How many rows were found in the database using those parameters
		if($resultCheck < 1){ //user isn't found in the database
			header("Location: ../index.php?login=error");
			exit();
		} else {
			if($row = mysqli_fetch_assoc($result)){
				//De-hashing the password
				$hashedPsdCheck = password_verify($pwd, $row['user_pwd']);
				if($hashedPwdCheck == false){ //Password doesn't match
					header("Location: ../index.php?login=error");
					exit();
				} elseif($hashedPwdCheck == true) { //Passwords match
					//Login in the user here
					$_SESSON['u_id'] = $row['user_id'];
					$_SESSON['u_first'] = $row['user_first'];
					$_SESSON['u_last'] = $row['user_last'];
					$_SESSON['u_email'] = $row['user_email'];
					$_SESSON['u_uid'] = $row['user_uid'];
					header("Location: ../index.php?login=success");
					exit();
				}
			}
		}
	}
	
	header("Location: ../index.php?login=unexpectederror");
	exit();
	
}