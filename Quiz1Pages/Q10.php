<?php

	include 'header.php';
?>		
		<?php
			if (!isset($_SESSION['u_id'])) {
				echo "<h2>WARNING: Your data will not be saved unless you login</h2><br><br><br>";
			}
			else{
				if($_SESSION['quiz1q10'] == 1){
					echo '<br><br><h4>That is correct!</h4>';
				}
				else if($_SESSION['quiz1q10'] == 2){
					echo '<br><br><h4>That is incorrect!</h4>';
				}
			}
		?>
		<br><br><br>
		<!-- prompt question -->
		<center><img src="../Quiz1/Q10.png" alt="Question 10" class="img"><br><br><br><br><br>
		<p>Input your answer here:</p>
		<form action="checker/Q10c.php" method="POST">
			<input type="text" name="answer" placeholder="Your Answer" class="textBox"><br><br>
			<button type="submit" name="submit" class="submitBtn">Submit</button>		<br><br><br><br>
		</form>
		
		
		<!-- nav buttons -->
		<a href="Q9.php"><button class="submitBtn"><- Question 9</button></a>
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
				echo '<a href="../Quiz1/Solutions/Q10s.PNG"><button class="submitBtn">Solution</button></a>';
				$_SESSION['quiz1q10'] = 1;
				if($_SESSION['quiz1q10refresh'] == 1){
					$_SESSION['quiz1q10refresh'] = 0;
					header("Refresh:0");
				}
			}
		
			
		?>
		<a href="../quiz1.php"><button class="submitBtn"> All Questions -></button></a>
		<br><br>
		<!-- hint and solution unlocker-->
		<?php
		//change these vars for each test and quiz number
		$test = 'quiz1';
		$qnum = 'Q10';
		$numAns = 0;
		if(!isset($_SESSION[$test])){
				$_SESSION[$test] = ''; //set answerholder to empty string if not set yet
		}
		$numAns = substr_count($_SESSION[$test], 'Q');//counts num questions counted
		if($numAns === 5){
				exit();
		}
		if($numAns < 2){
			echo "<p>Answers until next hint</p><p>".(2-$numAns)."</p>";
		}else{
			echo '<br><form action="Checker/UseHint.php" method="POST">
					<button type="submit" name="submit" class="submitBtn">Use a hint!</button>
				</form>';
				$_SESSION['qnum']=$qnum;
				
		}
		echo '<br>';
		
		//add in non hinted answers
		$numAns += substr_count($_SESSION[$test], 'q');//counts num questions counted
		if($numAns < 4){
			echo "<p>Answers until exam solutions unlocked</p><p>".(4-$numAns)."</p>";
		}else{
			echo '<br><form action="Checker/UnlockExam1.php" method="POST">
					<button type="submit" name="submit" class="submitBtn">Reveal answers</button>
				</form>';
				$_SESSION['qnum']=$qnum;
				
		}
		
		?>

		</center>

		

		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><!-- BS to make the footer stay at the bottom until a better solution is found -->
<?php
	include_once '../footer.php';
?>