<?php
session_start();
if (isset($_POST['submit'])){ //checks if the submit button has been clicked
	include_once "../../includes/dbh-inc.php";
	//change these for each question
	$test = 'exam1';
	$qnum = $_SESSION['qnum'];
	
	$currentid = $_SESSION['u_id']; //get current user's id
	$answerholder = $_SESSION[$test];
	$count = 1;
	$answerholder = str_replace_first('Q','q',$answerholder,$count);//replace one Q with q
	
	//set update answer
	if(isset($_SESSION['u_id'])){
		$sql = "UPDATE users SET $test='$answerholder' WHERE id=$currentid"; //update score in db
		mysqli_query($conn, $sql);  //send command to update
		
	}
	
	//update answerholder
	$_SESSION[$test] = $answerholder;
	
	header("Location: ../../Exam1/Solutions/". $qnum . s . ".png");
	exit();
	
}
else{
	header("Location: ../$qnum.php?hint=error");
	exit();
}

function str_replace_first($from, $to, $subject)
{
    $from = '/'.preg_quote($from, '/').'/';

    return preg_replace($from, $to, $subject, 1);
}