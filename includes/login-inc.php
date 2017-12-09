<?php

session_start();

if (isset($_POST['submit'])){ //checks if the submit button has been clicked

	include_once 'dbh-inc.php';
	$uid = mysqli_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_escape_string($conn, $_POST['pwd']);
	
	//Error handlers
	if(empty($uid)|| empty($pwd)){ //If fields are empty
			header("Location: ../index.php?login=empty");
			exit();
	} else{
		$sql = "SELECT * FROM users WHERE user_uid='$uid'"; //add OR user_email = '$uid' to check for email login
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result); //How many rows were found in the database using those parameters
		if($resultCheck < 1){ //user isn't found in the database
			header("Location: ../index.php?login=usernotfound");
			exit();
		} else {
			if($row = mysqli_fetch_assoc($result)){
				//De-hashing the password
				//$hashedPwdCheck = strcmp($pwd, $row['user_pwd']);
				$hashedPwdCheck = password_verify($pwd, $row['user_pwd']); //for if we use hashed passwords
				if($hashedPwdCheck == false){
				//if($hashedPwdCheck != 0){ //Password doesn't match
					header("Location: ../index.php?login=passwordincorrect");
					$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
					exit();

				}elseif($hashedPwdCheck == true) { //Passwords match
					//else if($hashedPwdCheck == 0){
					//login in the user here
					$_SESSION['u_id'] = $row['id'];
					$_SESSION['u_first'] = $row['user_first'];
					$_SESSION['u_last'] = $row['user_last'];
					$_SESSION['u_email'] = $row['user_email'];
					$_SESSION['u_uid'] = $row['user_uid'];
					header("Location: ../index.php?login=success");
					exit();
					
				}
			}
		}
	}
	
	//header("Location: ../index.php?login=unexpectederror");
	//exit();
	
}else{
	header("Location: ../index.php?login=error");
	exit();
}