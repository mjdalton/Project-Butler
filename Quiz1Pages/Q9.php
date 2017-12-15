<?php

	include 'header.php';
?>		
		<?php
			if (!isset($_SESSION['u_id'])) {
				echo "<h2>WARNING: Your data will not be saved unless you login</h2><br><br><br>";
			}
		?>
		<br><br><br>
		<!-- prompt question -->
		<center><img src="../Quiz1/Q9.png" alt="Question 9" class="img"><br><br><br><br><br>
		<p>Input your answer here:</p>
		<form action="checker/Q9c.php" method="POST">
			<input type="number" name="answer" placeholder="Your Answer" class="textBox"><br><br>
			<button type="submit" name="submit" class="submitBtn">Submit</button>		<br><br><br><br>
		</form>
		
		
		<!-- nav buttons -->
		<a href="Q8.php"><button class="submitBtn"><- Question 8</button></a>
		<?php
			//search to see if question number is answered
			$qnum = 'Q9';
			$test = 'quiz1';
			if(!isset($_SESSION[$test])){
				$_SESSION[$test] = ''; //set answerholder to empty string if not set yet
			}
			$answerholder = $_SESSION[$test]; //get current answerholder variable
			$pos = strpos($answerholder, ($qnum . ','));//with comma seperator
		
			//display solution if question is answered
			if($pos !== false){
				echo '<a href="../Quiz1/Solutions/Q9s.PNG"><button class="submitBtn">Solution</button></a>';
			}
		
			
		?>
		<a href="Q10.php"><button class="submitBtn">Question 10 -></button></a>

		</center>

		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><!-- BS to make the footer stay at the bottom until a better solution is found -->
<?php
	include_once '../footer.php';
?>