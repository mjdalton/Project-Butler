<?php

	include_once 'header.php';
	include_once '../includes/dbh-inc.php'; //connection to the database
?>
		
		
		<?php
			if (!isset($_SESSION['u_id'])) {
				echo "<h2>WARNING: Your data will not be saved unless you login</h2><br><br><br>";
			}
		?>
		<br><br><br>
		<center>
		<!-- prompt question -->
		<img src="../Quiz1/Q1.png" alt="Question 1" class="img">		<br><br><br><br><br>
		<p>Input your answer here:</p>
		<form action="checker/Q1c.php" method="POST">
			<input type="number" name="answer" placeholder="Your Answer" class="textBox"><br><br>
			<button type="submit" name="submit" class="submitBtn">Submit</button>		<br><br><br><br>
		</form>
		
		
		<!-- nav buttons -->
		<a href="../quiz1.php"><button class="submitBtn"><- All Questions</button></a>
		<?php
			//search to see if question number is answered
			$qnum = 'Q1';
			$test = 'quiz1';
			if(!isset($_SESSION[$test])){
				$_SESSION[$test] = ''; //set answerholder to empty string if not set yet
			}
			$answerholder = $_SESSION[$test]; //get current answerholder variable
			$pos = strpos($answerholder, ($qnum . ','));//with comma seperator
		
			//display solution if question is answered
			if($pos !== false){
				echo '<a href="../Quiz1/Solutions/Q1s.PNG"><button class="submitBtn">Solution</button></a>';
			}
		
			
		?>
		<a href="Q2.php"><button class="submitBtn">Question 2 -></button></a>
		
		</center>
		
		
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			
<?php
	include_once 'footer.php';
?>