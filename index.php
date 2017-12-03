
<?php

	include_once 'header.php';
?>
		<center><a href="quiz1.php"><button class="resumeBtn">QUIZ 1</button></a></center>
		<center><a href="quiz2.php"><button class="resumeBtn">QUIZ 2</button></a></center>
		<center><a href="quiz3.php"><button class="resumeBtn">QUIZ 3</button></a></center>
		<!-- <center><a href="quiz4.php"><button class="resumeBtn">QUIZ 4</button></a></center>
		<center><a href="quiz5.php"><button class="resumeBtn">QUIZ 5</button></a></center><br> -->
		<?php
			if (isset($_SESSION['u_id'])) {
				echo "<p>You are logged in!</p>";
			}
		?>
		
		<br><br><br><br><br><br><br><br><br><br><!-- BS to make the footer stay at the bottom until a better solution is found -->
<?php
	include_once 'footer.php';
?>
