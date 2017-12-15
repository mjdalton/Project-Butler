<?php

	include 'header.php';
?>		
		<?php
			if (!isset($_SESSION['u_id'])) {
				echo "<h2>WARNING: Your data will not be saved unless you login</h2><br><br><br>";
			}
		?>
		<br><br><br>
		<!--Question prompt-->
		<center><img src="../Exam1/Q3.png" alt="Question 3" class="img"><br><br><br><br><br>
		<p>Input your answer here:</p>
		<form action="Checker/Q3c.php" method="POST">
			<input type="number" name="answer" placeholder="Your Answer" class="textBox"><br><br>
			<button type="submit" name="submit" class="submitBtn">Submit</button>		<br><br><br><br>
		</form>
		
		<!--Nav buttons-->
		<a href="Q2.php"><button class="submitBtn"><- Question 2</button></a>
		<?php
			//search to see if question number is answered
			$qnum = 'Q3';
			$test = 'exam1';
			if(!isset($_SESSION[$test])){
				$_SESSION[$test] = ''; //set answerholder to empty string if not set yet
			}
			$answerholder = $_SESSION[$test]; //get current answerholder variable
			$pos = strpos($answerholder, ($qnum . ','));
		
			//display solution if question is answered
			if($pos !== false){
				echo '<a href="../Exam1/Solutions/Q3s.PNG"><button class="submitBtn">Solution</button></a>';
			}
		
			
		?>
		<a href="Q4.php"><button class="submitBtn">Question 4 -></button></a>
		<p id="demo"></p></center>

		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><!-- BS to make the footer stay at the bottom until a better solution is found -->
<?php
	include_once '../footer.php';
?>