<?php

session_start();
session_unset();
session_destroy();

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
					$_SESSION['u_score'] = $row['score'];
					
					//load answerholders
					$_SESSION['quiz1'] = $row['quiz1'];
					$_SESSION['quiz2'] = $row['quiz2'];
					$_SESSION['quiz3'] = $row['quiz3'];
					$_SESSION['exam1'] = $row['exam1'];
					$_SESSION['exam2'] = $row['exam2'];
					$_SESSION['exam3'] = $row['exam3'];
					
					/* -------- exam question correctness variables ---------- */
					//practice exam 1
					$_SESSION['exam1q1'] = 0;
					$_SESSION['exam1q2'] = 0;
					$_SESSION['exam1q3'] = 0;
					$_SESSION['exam1q4'] = 0;
					$_SESSION['exam1q5'] = 0;
					$_SESSION['exam1q1refresh'] = 1;
					$_SESSION['exam1q2refresh'] = 1;
					$_SESSION['exam1q3refresh'] = 1;
					$_SESSION['exam1q4refresh'] = 1;
					$_SESSION['exam1q5refresh'] = 1;
					//practice exam 2
					$_SESSION['exam2q1'] = 0;
					$_SESSION['exam2q2'] = 0;
					$_SESSION['exam2q3'] = 0;
					$_SESSION['exam2q4'] = 0;
					$_SESSION['exam2q5'] = 0;
					$_SESSION['exam2q1refresh'] = 1;
					$_SESSION['exam2q2refresh'] = 1;
					$_SESSION['exam2q3refresh'] = 1;
					$_SESSION['exam2q4refresh'] = 1;
					$_SESSION['exam2q5refresh'] = 1;
					//practice exam 3
					$_SESSION['exam3q1'] = 0;
					$_SESSION['exam3q2'] = 0;
					$_SESSION['exam3q3'] = 0;
					$_SESSION['exam3q4'] = 0;
					$_SESSION['exam3q5'] = 0;
					$_SESSION['exam3q1refresh'] = 1;
					$_SESSION['exam3q2refresh'] = 1;
					$_SESSION['exam3q3refresh'] = 1;
					$_SESSION['exam3q4refresh'] = 1;
					$_SESSION['exam3q5refresh'] = 1;
					
					/* -------- quiz question correctness variables --------- */
					$_SESSION['quiz1q1'] = 0;
					$_SESSION['quiz1q2'] = 0;
					$_SESSION['quiz1q3'] = 0;
					$_SESSION['quiz1q4'] = 0;
					$_SESSION['quiz1q5'] = 0;
					$_SESSION['quiz1q6'] = 0;
					$_SESSION['quiz1q7'] = 0;
					$_SESSION['quiz1q8'] = 0;
					$_SESSION['quiz1q9'] = 0;
					$_SESSION['quiz1q10'] = 0;
					$_SESSION['quiz1q1refresh'] = 1;
					$_SESSION['quiz1q2refresh'] = 1;
					$_SESSION['quiz1q3refresh'] = 1;
					$_SESSION['quiz1q4refresh'] = 1;
					$_SESSION['quiz1q5refresh'] = 1;
					$_SESSION['quiz1q6refresh'] = 1;
					$_SESSION['quiz1q7refresh'] = 1;
					$_SESSION['quiz1q8refresh'] = 1;
					$_SESSION['quiz1q9refresh'] = 1;
					$_SESSION['quiz1q10refresh'] = 1;
					//quiz 2
					$_SESSION['quiz2q1'] = 0;
					$_SESSION['quiz2q2'] = 0;
					$_SESSION['quiz2q3'] = 0;
					$_SESSION['quiz2q4'] = 0;
					$_SESSION['quiz2q5'] = 0;
					$_SESSION['quiz2q6'] = 0;
					$_SESSION['quiz2q7'] = 0;
					$_SESSION['quiz2q8'] = 0;
					$_SESSION['quiz2q9'] = 0;
					$_SESSION['quiz2q10'] = 0;
					$_SESSION['quiz2q1refresh'] = 1;
					$_SESSION['quiz2q2refresh'] = 1;
					$_SESSION['quiz2q3refresh'] = 1;
					$_SESSION['quiz2q4refresh'] = 1;
					$_SESSION['quiz2q5refresh'] = 1;
					$_SESSION['quiz2q6refresh'] = 1;
					$_SESSION['quiz2q7refresh'] = 1;
					$_SESSION['quiz2q8refresh'] = 1;
					$_SESSION['quiz2q9refresh'] = 1;
					$_SESSION['quiz2q10refresh'] = 1;
					//quiz3
					$_SESSION['quiz3q1'] = 0;
					$_SESSION['quiz3q2'] = 0;
					$_SESSION['quiz3q3'] = 0;
					$_SESSION['quiz3q4'] = 0;
					$_SESSION['quiz3q5'] = 0;
					$_SESSION['quiz3q6'] = 0;
					$_SESSION['quiz3q7'] = 0;
					$_SESSION['quiz3q8'] = 0;
					$_SESSION['quiz3q9'] = 0;
					$_SESSION['quiz3q10'] = 0;
					$_SESSION['quiz3q1refresh'] = 1;
					$_SESSION['quiz3q2refresh'] = 1;
					$_SESSION['quiz3q3refresh'] = 1;
					$_SESSION['quiz3q4refresh'] = 1;
					$_SESSION['quiz3q5refresh'] = 1;
					$_SESSION['quiz3q6refresh'] = 1;
					$_SESSION['quiz3q7refresh'] = 1;
					$_SESSION['quiz3q8refresh'] = 1;
					$_SESSION['quiz3q9refresh'] = 1;
					$_SESSION['quiz3q10refresh'] = 1;
					
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