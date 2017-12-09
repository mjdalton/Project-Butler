<?php

	include_once 'header.php';
?>

		<br><br><h2>Login</h2>
		<form action="includes/login-inc.php" method="POST"><center><br><br>
			<p>Username:</p>
			<input type ="text" name="uid" placeholder="Username" class="textBox"><br><br>
			<p>Password:</p>
			<input type ="password" name="pwd" placeholder="Password" class="textBox"><br><br><br>
			<button type="submit" name="submit" class="submitBtn">Login</button>
			<!--<input type ="submit" name="Submit" class="submitBtn"> -->
			</center>
		</form>
		
		<br><br><br><br><h2>Don't have an account yet?</h2><br><br>
		<center><a href="signup.php"><button class="submitBtn">Signup</button></a></center><br><br>
		<center><a href="logout.php"><button class="submitBtn">Logout</button></a></center>
		
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php
	include_once 'footer.php';
?>