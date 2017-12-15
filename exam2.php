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
			<a href = "Exam2Pages/Q1.php"><img src="Exam2/Q1.png" alt="Question 1" class="imgLink"></a><br><br>
			<?php
			//search to see if question number is answered
			$qnum = 'Q1';
			$test = 'exam2';
			if(!isset($_SESSION[$test])){
				$_SESSION[$test] = ''; //set answerholder to empty string if not set yet
			}
			$answerholder = $_SESSION[$test]; //get current answerholder variable
			$pos = strpos($answerholder, ($qnum . ','));
		
			//display solution if question is answered
			if($pos !== false){
				echo '<a href="Exam2/Solutions/Q1s.PNG"><button class="submitBtn">Solution</button></a>';
			}
		
			
			?><br><br>
			<h3>Question 2</h3><br>
			<a href = "Exam2Pages/Q2.php"><img src="Exam2/Q2.png" alt="Question 2" class="imgLink"></a><br><br>
			<?php
			//search to see if question number is answered
			$qnum = 'Q2';
			$test = 'exam2';
			if(!isset($_SESSION[$test])){
				$_SESSION[$test] = ''; //set answerholder to empty string if not set yet
			}
			$answerholder = $_SESSION[$test]; //get current answerholder variable
			$pos = strpos($answerholder, ($qnum . ','));
		
			//display solution if question is answered
			if($pos !== false){
				echo '<a href="Exam2/Solutions/Q2s.PNG"><button class="submitBtn">Solution</button></a>';
			}
		
			
			?><br><br>
			<h3>Question 3</h3><br>
			<a href = "Exam2Pages/Q3.php"><img src="Exam2/Q3.png" alt="Question 3" class="imgLink"></a><br><br>
			<?php
			//search to see if question number is answered
			$qnum = 'Q3';
			$test = 'exam2';
			if(!isset($_SESSION[$test])){
				$_SESSION[$test] = ''; //set answerholder to empty string if not set yet
			}
			$answerholder = $_SESSION[$test]; //get current answerholder variable
			$pos = strpos($answerholder, ($qnum . ','));
		
			//display solution if question is answered
			if($pos !== false){
				echo '<a href="Exam2/Solutions/Q3s.PNG"><button class="submitBtn">Solution</button></a>';
			}
		
			
			?><br><br>
			<h3>Question 4</h3><br>
			<a href = "Exam2Pages/Q4.php"><img src="Exam2/Q4.png" alt="Question 4" class="imgLink"></a><br><br>
			<?php
			//search to see if question number is answered
			$qnum = 'Q4';
			$test = 'exam2';
			if(!isset($_SESSION[$test])){
				$_SESSION[$test] = ''; //set answerholder to empty string if not set yet
			}
			$answerholder = $_SESSION[$test]; //get current answerholder variable
			$pos = strpos($answerholder, ($qnum . ','));
		
			//display solution if question is answered
			if($pos !== false){
				echo '<a href="Exam2/Solutions/Q4s.PNG"><button class="submitBtn">Solution</button></a>';
			}
		
			
			?><br><br>
			<h3>Question 5</h3><br>
			<a href = "Exam2Pages/Q5.php"><img src="Exam2/Q5.png" alt="Question 5" class="imgLink"></a><br><br>
			<?php
			//search to see if question number is answered
			$qnum = 'Q5';
			$test = 'exam2';
			if(!isset($_SESSION[$test])){
				$_SESSION[$test] = ''; //set answerholder to empty string if not set yet
			}
			$answerholder = $_SESSION[$test]; //get current answerholder variable
			$pos = strpos($answerholder, ($qnum . ','));
		
			//display solution if question is answered
			if($pos !== false){
				echo '<a href="Exam2/Solutions/Q5s.PNG"><button class="submitBtn">Solution</button></a>';
			}
		
			
			?><br><br>
		</center>
		
		
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			
<?php
	include_once 'footer.php';
?>