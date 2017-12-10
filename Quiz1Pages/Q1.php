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
			<img src="../images/quiz1q1.png" alt="Question 1" class="img">		<br><br><br><br><br>
			<p>Input your answer here:</p>
			<form action="../includes/quiz1q1-inc.php" method="POST">
				<input type="number" name="answer" placeholder="Your Answer" class="textBox"><br><br>
				<button type="submit" name="submit" class="submitBtn">Submit</button>		<br><br><br><br>
			</form>
			<p id="demo"></p>
		</center>  <!-- What is this line for? -->


		
		<br><br><br>
		<center>
			<a href="../quiz1.php"><button class="submitBtn"><- All Questions</button></a>
			<a href="Q2.php"><button class="submitBtn">Question 2 -></button></a>
		</center>
		
		
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			
<?php
	include_once 'footer.php';
?>