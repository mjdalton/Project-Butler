<?php

	include_once 'header.php';
?>
		<h2>Login</h2><br><br>
		
		<center><form class="signup-form" action="includes/signup-inc.php" method="POST">
			<p>Insert your first name:</p>
			<input type="text" name="first" placeholder="Firstname" class="textBox"><br><br>
			<p>Insert your last name:</p>
			<input type="text" name="last" placeholder="Lastname" class="textBox"><br><br>
			<p>Insert your email:</p>
			<input type="text" name="email" placeholder="E-mail" class="textBox"><br><br>
			<p>Insert your username:</p>
			<input type="text" name="uid" placeholder="Username" class="textBox"><br><br>
			<p>Insert your password:<br></p><p class="smallTxt"> Passwords are case sensitive!<br></p>
			<input type="password" name="pwd" placeholder="Password" class="textBox"><br><br>
			<button type="submit" name="submit" class="submitBtn">Sign up</button><br>
		</form></center>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php
	include_once 'footer.php';
?>