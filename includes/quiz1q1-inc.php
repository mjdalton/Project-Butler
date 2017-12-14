<?php
session_start();
if (isset($_POST['submit'])){ //checks if the submit button has been clicked

	include_once 'dbh-inc.php';
	$answer = mysqli_escape_string($conn, $_POST['answer']);
	$currentScore = $_SESSION['u_score']; //get current score
	$currentid = $_SESSION['u_id']; //get current user's id
	$correctAns = 10;

	echo '<p>Submitted</p>';

	if($answer == $correctAns){
		header("Location: ../Quiz1Pages/Q1.php?submission=correct");
		$currentScore += 10;
		$sql = "UPDATE users SET score='$currentScore' quiz1='$currentScore' WHERE id='$currentid'"; //update score in db
		mysqli_query($conn, $sql);  //send command to update
		$_SESSION['u_score'] = $currentScore; //update current score
		$_SESSION['u_score'] = $currentScore;

	}
	else{
		header("Location: ../Quiz1Pages/Q1.php?submission=incorrect");
		echo '<h3>That is incorrect!</h3>';
		exit();
	}
	

}
else{
	header("Location: ../Quiz1Pages/Q1.php?submission=error");
	exit();
}