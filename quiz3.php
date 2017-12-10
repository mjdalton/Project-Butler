<?php

	include_once 'header.php';
	include_once 'includes/dbh-inc.php'; //connection to the database
?>

		<h2>WARNING: <br>Your data will not be saved unless you login</h2><br><br><br>

		<center>
			<h3>Question 1</h3><br>
			<a href = "quiz3q1.php"><img src="images/quiz3q1.png" alt="Question 1" class="imgLink"></a><br><br><br><br>
			<?php
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
			<a href = "quiz3q2.php"><img src="images/quiz3q2.png" alt="Question 2" class="imgLink"></a><br><br><br><br>
			<h3>Question 3</h3><br>
			<a href = "quiz3q3.php"><img src="images/quiz3q3.png" alt="Question 3" class="imgLink"></a><br><br><br><br>
			<h3>Question 4</h3><br>
			<a href = "quiz3q4.php"><img src="images/quiz3q4.png" alt="Question 4" class="imgLink"></a><br><br><br><br>
			<h3>Question 5</h3><br>
			<a href = "quiz3q5.php"><img src="images/quiz3q5.png" alt="Question 5" class="imgLink"></a><br><br><br><br>
			<h3>Question 6</h3><br>
			<a href = "quiz3q6.php"><img src="images/quiz3q6.png" alt="Question 6" class="imgLink"></a><br><br><br><br>
			<h3>Question 7</h3><br>
			<a href = "quiz3q7.php"><img src="images/quiz3q7.png" alt="Question 7" class="imgLink"></a><br><br><br><br>
			<h3>Question 8</h3><br>
			<a href = "quiz3q8.php"><img src="images/quiz3q8.png" alt="Question 8" class="imgLink"></a><br><br><br><br>
			<h3>Question 9</h3><br>
			<a href = "quiz3q9.php"><img src="images/quiz3q9.png" alt="Question  9" class="imgLink"></a><br><br><br><br>
			<h3>Question 10</h3><br>
			<a href = "quiz3q10.php"><img src="images/quiz3q10.png" alt="Question  10" class="imgLink"></a><br><br><br><br>
		</center>
		
		
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			
<?php
	include_once 'footer.php';
?>