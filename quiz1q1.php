<?php

	include_once 'header.php';
?>
		
		
		<?php
			if (!isset($_SESSION['u_id'])) {
				echo "<h2>WARNING: Your data will not be saved unless you login</h2><br><br><br>";
			}
		?>
		<center><img src="images/quiz1q1.png" alt="Question 1" class="img"></center><br>
		<p>Insert an answer box that connects to an answer verification script. If correct, will make note that user has completed this question and
		award points for completion.</p>
		
		
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			
<?php
	include_once 'footer.php';
?>