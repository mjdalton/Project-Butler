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
			<a href = "Exam2Pages/Q1.php"><img src="Exam2/Q1.png" alt="Question 1" class="imgLink"></a><br><br><br><br>
			<h3>Question 2</h3><br>
			<a href = "Exam2Pages/Q2.php"><img src="Exam2/Q2.png" alt="Question 2" class="imgLink"></a><br><br><br><br>
			<h3>Question 3</h3><br>
			<a href = "Exam2Pages/Q3.php"><img src="Exam2/Q3.png" alt="Question 3" class="imgLink"></a><br><br><br><br>
			<h3>Question 4</h3><br>
			<a href = "Exam2Pages/Q4.php"><img src="Exam2/Q4.png" alt="Question 4" class="imgLink"></a><br><br><br><br>
			<h3>Question 5</h3><br>
			<a href = "Exam2Pages/Q5.php"><img src="Exam2/Q5.png" alt="Question 5" class="imgLink"></a><br><br><br><br>
		</center>
		
		
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			
<?php
	include_once 'footer.php';
?>