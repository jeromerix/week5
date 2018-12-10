<html>
<head>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<?php include('loginindb.php')?>
<title>Login</title>
</head>
<body>
	<div class = "header">
	<h2> Login</h2>
	</div>
	<form action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
	<div class = "input-class <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
	<label>Username</label>
	<input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
	<span class="help-block"><?php echo $username_err; ?></span>
	</div>
	<div class="input-class <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
	<label>Password</label>
	<input type="password" name="password" class="form-control">
    <span class="help-block"><?php echo $password_err; ?></span>
	</div>
	<button type="submit" name="login" class ="btn">Login</button>
	</div>
	<p>
	<br>
	Not a member yet? <a href="register.php">Sign up</a>
	</form>

</body>
</html> 