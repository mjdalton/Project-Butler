<?php

	include 'header.php';
?>		
		<?php
			if (!isset($_SESSION['u_id'])) {
				echo "<h2>WARNING: Your data will not be saved unless you login</h2><br><br><br>";
			}
		?>
		<br><br><br>
		<center><img src="../images/quiz3q6.png" alt="Question 6" class="img"><br><br><br><br><br>
		<p>Input your answer here:</p>
		<input id="numb"><br><br>
		<button type="button" onclick="ansValidate()" class="submitBtn">Submit</button><br><br><br><br><br><br><br>
		<a href="Q5.php"><button class="submitBtn"><- Question 5</button></a>
		<a href="Q7.php"><button class="submitBtn">Question 7 -></button></a>
		

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
					//$sql = "INSERT INTO users (quiz1, score) VALUES ('3', '10')"; //Hopefully inputs values for completion of the question into the database
					//echo '<p>Succesful?</p>';
				?>
			}
			document.getElementById("demo").innerHTML = text;
		}
		</script><br><br>

		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><!-- BS to make the footer stay at the bottom until a better solution is found -->
<?php
	include_once '../footer.php';
?>