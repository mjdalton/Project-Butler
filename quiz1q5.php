<?php

	include_once 'header.php';
?>
		
		
		<?php
			if (!isset($_SESSION['u_id'])) {
				echo "<h2>WARNING: Your data will not be saved unless you login</h2><br><br><br>";
			}
		?>
		<center><img src="images/quiz1q5.png" alt="Question 1" class="img"><br><br><br><br><br>
		<p>Input your answer here:</p>
		<input id="numb"><br><br>
		<button type="button" onclick="ansValidate()" class="submitBtn">Submit</button><br><br><br><br><br><br><br>
		<a href="quiz1q3.php"><button class="submitBtn"><- Question 3</button></a>
		<a href="quiz1.php"><button class="submitBtn">All Questions -></button></a>

		<p id="demo"></p></center>

		<script>
		function ansValidate() {
			var x, text;

			// Get the value of the input field with id="numb"
			x = document.getElementById("numb").value;

			// If x is Not a Number or less than one or greater than 10
			if (isNaN(x) || x != 10) {
				text = "Input incorrect";
			} else {
				text = "Input correct";
				<?php
					$sql = "INSERT INTO users (quiz1, points) VALUES (1, 10)"; //Hopefully inputs values for completion of the question into the database
				?>
			}
			document.getElementById("demo").innerHTML = text;
		}
		</script><br><br>
		<p>This script currently returns whether a number is 10, when we have answer we should compare strings since this question is a plane?  The warning for logging in is set to disappear
		if the user is logged in.</p>
		
		
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			
<?php
	include_once 'footer.php';
?>
