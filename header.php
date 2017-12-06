
<?php

?>
<!DOCTYPE html>
<html>
    <head>
      <title>Project Butler</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
 	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- The GitHub icon -->
		<link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet"> <!-- The Cabin font -->
		<script src="backtotop.js" type="text/javascript"></script> <!-- Script for the back to top button -->
        <link href="style.css" rel="stylesheet" type="text/css" />
  </head>
  <body>

<nav class="navbar navbar-default">
	<div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Math265</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Quizzes
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="quiz1.php">Quiz 1</a></li>
          <li><a href="quiz2.php">Quiz 2</a></li>
          <li><a href="quiz3.php">Quiz 3</a></li>
        </ul>
      </li>
      <li><a href="leaderboards.php">Leaderboards</a></li>
		<!-- <li><a href="login.php">Login</a></li> -->
		<?php
			if (isset($_SESSION['u_id'])) {
				echo '<li><a href="logout.php">Logout</a></li>';
			} else {
				echo '<li><a href="login.php">Login</a></li>';
			}
		?>
    </ul>
</div>
</nav>

  