<?php
session_start();
if (isset($_POST['submit'])){ //checks if the submit button has been clicked
	include_once "../../includes/dbh-inc.php";
	//change these for each question
	$test = 'exam1';
	$qnum = $_SESSION['qnum'];
	
	$currentid = $_SESSION['u_id']; //get current user's id
	$answerholder = "Q1,Q2,Q3,Q4,Q5,"; //update answerholder
	
	//update answerholder
	if(isset($_SESSION['u_id'])){
		$sql = "UPDATE users SET $test='$answerholder' WHERE id=$currentid"; //update score in db
		mysqli_query($conn, $sql);  //send command to update
		
	}
	
	//update answerholder
	$_SESSION[$test] = $answerholder;
	
	header("Location: ../$qnum.php?unlock=unlocked");
	exit();
	
}
else{
	header("Location: ../$qnum.php?unlock=error");
	exit();
}