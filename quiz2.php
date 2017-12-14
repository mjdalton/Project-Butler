<?php

	include_once 'header.php';
	include_once 'includes/dbh-inc.php'; //connection to the database
?>

		<?php
			if (!isset($_SESSION['u_id'])) {
				echo "<h2>WARNING: Your data will not be saved unless you login</h2><br><br><br>";
			}
		?>

		<center>
			<h3>Question 1</h3><br>
			<a href = "Quiz2Pages/Q1.php"><img src="images/quiz2q1.png" alt="Question 1" class="imgLink"></a><br><br><br><br>
			<h3>Question 2</h3><br>
			<a href = "Quiz2Pages/Q2.php"><img src="images/quiz2q2.png" alt="Question 2" class="imgLink"></a><br><br><br><br>
			<h3>Question 3</h3><br>
			<a href = "Quiz2Pages/Q3.php"><img src="images/quiz2q3.png" alt="Question 3" class="imgLink"></a><br><br><br><br>
			<h3>Question 4</h3><br>
			<a href = "Quiz2Pages/Q4.php"><img src="images/quiz2q4.png" alt="Question 4" class="imgLink"></a><br><br><br><br>
			<h3>Question 5</h3><br>
			<a href = "Quiz2Pages/Q5.php"><img src="images/quiz2q5.png" alt="Question 5" class="imgLink"></a><br><br><br><br>
			<h3>Question 6</h3><br>
			<a href = "Quiz2Pages/Q6.php"><img src="images/quiz2q6.png" alt="Question 6" class="imgLink"></a><br><br><br><br>
			<h3>Question 7</h3><br>
			<a href = "Quiz2Pages/Q7.php"><img src="images/quiz2q7.png" alt="Question 7" class="imgLink"></a><br><br><br><br>
			<h3>Question 8</h3><br>
			<a href = "Quiz2Pages/Q8.php"><img src="images/quiz2q8.png" alt="Question 8" class="imgLink"></a><br><br><br><br>
			<h3>Question 9</h3><br>
			<a href = "Quiz2Pages/Q9.php"><img src="images/quiz2q9.png" alt="Question 9" class="imgLink"></a><br><br><br><br>
			<h3>Question 10</h3><br>
			<a href = "Quiz2Pages/Q10.php"><img src="images/quiz2q10.png" alt="Question 10" class="imgLink"></a><br><br><br><br>
		</center>
		
		
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			
<?php
	include_once 'footer.php';
?>