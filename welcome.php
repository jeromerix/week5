<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="stylesheet.css">
	<?php include "welcomelogincheck.php"?>
	<?php include "server.php"?>
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to Happy buys.</h1>
	 <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Options
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">my articles</a></li>
      <li><a href="resetpassword.php">password reset</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>
	</div>                                   
</body>
</html>