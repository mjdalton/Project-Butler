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
			<a href = "Quiz1Pages/Q1.php"><img src="Quiz1/Q1.png" alt="Question 1" class="imgLink"></a><br><br>
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
				echo '<a href="/Quiz1/Solutions/Q1s.PNG"><button class="submitBtn">Solution</button></a>';
			}
			?><br><br>
			<h3>Question 2</h3><br>
			<a href = "Quiz1Pages/Q2.php"><img src="Quiz1/Q2.png" alt="Question 2" class="imgLink"></a><br><br>
			<?php
			//search to see if question number is answered
			$qnum = 'Q2';
			$test = 'quiz1';
			if(!isset($_SESSION[$test])){
				$_SESSION[$test] = ''; //set answerholder to empty string if not set yet
			}
			$answerholder = $_SESSION[$test]; //get current answerholder variable
			$pos = strpos($answerholder, ($qnum . ','));//with comma seperator
		
			//display solution if question is answered
			if($pos !== false){
				echo '<a href="/Quiz1/Solutions/Q2s.PNG"><button class="submitBtn">Solution</button></a>';
			}
			?><br><br>
			<h3>Question 3</h3><br>
			<a href = "Quiz1Pages/Q3.php"><img src="Quiz1/Q3.png" alt="Question 3" class="imgLink"></a><br><br>
			<?php
			//search to see if question number is answered
			$qnum = 'Q3';
			$test = 'quiz1';
			if(!isset($_SESSION[$test])){
				$_SESSION[$test] = ''; //set answerholder to empty string if not set yet
			}
			$answerholder = $_SESSION[$test]; //get current answerholder variable
			$pos = strpos($answerholder, ($qnum . ','));//with comma seperator
		
			//display solution if question is answered
			if($pos !== false){
				echo '<a href="/Quiz1/Solutions/Q3s.PNG"><button class="submitBtn">Solution</button></a>';
			}
			?><br><br>
			<h3>Question 4</h3><br>
			<a href = "Quiz1Pages/Q4.php"><img src="Quiz1/Q4.png" alt="Question 4" class="imgLink"></a><br><br>
			<?php
			//search to see if question number is answered
			$qnum = 'Q4';
			$test = 'quiz1';
			if(!isset($_SESSION[$test])){
				$_SESSION[$test] = ''; //set answerholder to empty string if not set yet
			}
			$answerholder = $_SESSION[$test]; //get current answerholder variable
			$pos = strpos($answerholder, ($qnum . ','));//with comma seperator
		
			//display solution if question is answered
			if($pos !== false){
				echo '<a href="/Quiz1/Solutions/Q4s.PNG"><button class="submitBtn">Solution</button></a>';
			}
			?><br><br>
			<h3>Question 5</h3><br>
			<a href = "Quiz1Pages/Q5.php"><img src="Quiz1/Q5.png" alt="Question 5" class="imgLink"></a><br><br>
			<?php
			//search to see if question number is answered
			$qnum = 'Q5';
			$test = 'quiz1';
			if(!isset($_SESSION[$test])){
				$_SESSION[$test] = ''; //set answerholder to empty string if not set yet
			}
			$answerholder = $_SESSION[$test]; //get current answerholder variable
			$pos = strpos($answerholder, ($qnum . ','));//with comma seperator
		
			//display solution if question is answered
			if($pos !== false){
				echo '<a href="/Quiz1/Solutions/Q5s.PNG"><button class="submitBtn">Solution</button></a>';
			}
			?><br><br>
			<h3>Question 6</h3><br>
			<a href = "Quiz1Pages/Q6.php"><img src="Quiz1/Q6.png" alt="Question 6" class="imgLink"></a><br><br>
			<?php
			//search to see if question number is answered
			$qnum = 'Q6';
			$test = 'quiz1';
			if(!isset($_SESSION[$test])){
				$_SESSION[$test] = ''; //set answerholder to empty string if not set yet
			}
			$answerholder = $_SESSION[$test]; //get current answerholder variable
			$pos = strpos($answerholder, ($qnum . ','));//with comma seperator
		
			//display solution if question is answered
			if($pos !== false){
				echo '<a href="/Quiz1/Solutions/Q6s.PNG"><button class="submitBtn">Solution</button></a>';
			}
			?><br><br>
			<h3>Question 7</h3><br>
			<a href = "Quiz1Pages/Q7.php"><img src="Quiz1/Q7.png" alt="Question 7" class="imgLink"></a><br><br>
			<?php
			//search to see if question number is answered
			$qnum = 'Q7';
			$test = 'quiz1';
			if(!isset($_SESSION[$test])){
				$_SESSION[$test] = ''; //set answerholder to empty string if not set yet
			}
			$answerholder = $_SESSION[$test]; //get current answerholder variable
			$pos = strpos($answerholder, ($qnum . ','));//with comma seperator
		
			//display solution if question is answered
			if($pos !== false){
				echo '<a href="/Quiz1/Solutions/Q7s.PNG"><button class="submitBtn">Solution</button></a>';
			}
			?><br><br>
			<h3>Question 8</h3><br>
			<a href = "Quiz1Pages/Q8.php"><img src="Quiz1/Q8.png" alt="Question 8" class="imgLink"></a><br><br>
			<?php
			//search to see if question number is answered
			$qnum = 'Q8';
			$test = 'quiz1';
			if(!isset($_SESSION[$test])){
				$_SESSION[$test] = ''; //set answerholder to empty string if not set yet
			}
			$answerholder = $_SESSION[$test]; //get current answerholder variable
			$pos = strpos($answerholder, ($qnum . ','));//with comma seperator
		
			//display solution if question is answered
			if($pos !== false){
				echo '<a href="/Quiz1/Solutions/Q8s.PNG"><button class="submitBtn">Solution</button></a>';
			}
			?><br><br>
			<h3>Question 9</h3><br>
			<a href = "Quiz1Pages/Q9.php"><img src="Quiz1/Q9.png" alt="Question 9" class="imgLink"></a><br><br>
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
				echo '<a href="/Quiz1/Solutions/Q9s.PNG"><button class="submitBtn">Solution</button></a>';
			}
			?><br><br>
			<h3>Question 10</h3><br>
			<a href = "Quiz1Pages/Q10.php"><img src="Quiz1/Q10.png" alt="Question 10" class="imgLink"></a><br><br>
			<?php
			//search to see if question number is answered
			$qnum = 'Q10';
			$test = 'quiz1';
			if(!isset($_SESSION[$test])){
				$_SESSION[$test] = ''; //set answerholder to empty string if not set yet
			}
			$answerholder = $_SESSION[$test]; //get current answerholder variable
			$pos = strpos($answerholder, ($qnum . ','));//with comma seperator
		
			//display solution if question is answered
			if($pos !== false){
				echo '<a href="/Quiz1/Solutions/Q10s.PNG"><button class="submitBtn">Solution</button></a>';
			}
			?><br><br>
		</center>
		
		
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			
<?php
	include_once 'footer.php';
?>