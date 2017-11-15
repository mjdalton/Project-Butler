<?php

	include_once 'header.php';
?>

		<h2>Login Stuff</h2><br>
		<p>Don't have an account yet?</p><br>
		<center><a href="signup.php"><button class="submitBtn">Signup</button></a></center>
		<form action="includes/login-inc.php" method="POST"><center><br><br>
			<p>Username:</p>
			<input type ="text" name="uid" placeholder="Username" class="textBox"><br><br>
			<p>Password:</p>
			<input type ="password" name="pwd" placeholder="Password" class="textBox"><br><br><br>
			<button type="submit" name="submit" class="submitBtn">Login</button>
			<!--<input type ="submit" name="Submit" class="submitBtn"> -->
			</center>
		</form>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php
	include_once 'footer.php';
?>