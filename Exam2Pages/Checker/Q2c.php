<?php
session_start();
if (isset($_POST['submit'])){ //checks if the submit button has been clicked

	include_once "../../includes/dbh-inc.php";
	//change these for each question
	$test = 'exam2';
	$qnum = 'Q2';
	$correctAns = 'D(0,-4)=saddle,D(0,2)=saddle,D(4,4)=min,D(-4,4)=min';
	
	$answer = mysqli_escape_string($conn, $_POST['answer']);
	$currentScore = $_SESSION['u_score']; //get current score
	$currentid = $_SESSION['u_id']; //get current user's id
	$answerholder = $_SESSION[$test]; //get current answerholder variable
	


	if($answer == $correctAns){
		$pos = strpos($answerholder, ($qnum . ','));
		
		//increment score and answer holder if not previously answered
		if($pos === false){
			$currentScore += 10;
			$answerholder .= $qnum . ','; //append questions number to answerholder
		}
		//set score and increment answers
		if(isset($_SESSION['u_id'])){
			$sql = "UPDATE users SET score=$currentScore, $test='$answerholder' WHERE id=$currentid"; //update score in db
			mysqli_query($conn, $sql);  //send command to update
			
		}
		
		//update current score and answerholder
		$_SESSION['u_score'] = $currentScore;
		$_SESSION[$test] = $answerholder;
		
		//go back
		header("Location: ../$qnum.php?submission=correct?score=$currentScore");
		exit();
	}
	else{
		header("Location: ../$qnum.php?submission=incorrect");
		exit();
	}
	

}
else{
	header("Location: ../$qnum.php?submission=error");
	exit();
}