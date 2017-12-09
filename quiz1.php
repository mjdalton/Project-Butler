<?php

	include_once 'header.php';
	include_once 'includes/dbh-inc.php'; //connection to the database
?>

		<h2>WARNING: <br>Your data will not be saved unless you login</h2><br><br><br>

		<center>
			<h3>Question 1</h3><br>
			<a href = "quiz1q1.php"><img src="images/quiz1q1.png" alt="Question 1" class="imgLink"></a><br><br><br><br>
			<?php
				/** Doesn't work, probably the better way to do this if we could get it to work **/
				//$userquiz1ans1 = mysqli_escape_string($conn, $_POST['quiz1']); //gets user's progress on quiz1
				//$quiz1ans1 = 3;
				//if($quiz1ans1 == $userquiz1ans1){
				//	echo '<center><a href="quiz1.php"><button class="resumeBtn">QUIZ 1</button></a></center>';
				//
				
				/** Tried another approach, this places data into an array, likely not the best way to do this **/
									$sql = "SELECT * FROM users";
					$result = mysqli_query($conn, $sql);
					$datas = array();
					if(mysqli_num_rows($result) > 0){
						while($row = mysqli_fetch_assoc($result)){
								$datas[] = $row;
						}
					}
					//print_r($data);
					foreach($datas[6] as $data){
						echo $data;
					}
			?>
			<h3>Question 2</h3><br>
			<a href = "quiz1q2.php"><img src="images/quiz1q2.png" alt="Question 2" class="imgLink"></a><br><br><br><br>
			<h3>Question 3</h3><br>
			<a href = "quiz1q3.php"><img src="images/quiz1q3.png" alt="Question 3" class="imgLink"></a><br><br><br><br>
			<h3>Question 4</h3><br>
			<a href = "quiz1q4.php"><img src="images/quiz1q4.png" alt="Question 4" class="imgLink"></a><br><br><br><br>
			<h3>Question 5</h3><br>
			<a href = "quiz1q5.php"><img src="images/quiz1q5.png" alt="Question 5" class="imgLink"></a><br><br><br><br>
		</center>
		
		
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			
<?php
	include_once 'footer.php';
?>